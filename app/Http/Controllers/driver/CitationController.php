<?php

namespace App\Http\Controllers\court;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Officer;
use App\Models\AssineCitation;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use DataTables;
use Validator;
use File;
use Intervention\Image\Facades\Image;

class CitationController extends Controller
{
    private $model;
    private $table;
    private $page;
    private $url;
    private $title;

    public function __construct()
    {
        // Initialize the global variable in the constructor
        $this->model = 'Citation';
        $this->table = 'citations';
        $this->page = 'citation';
        $this->url = 'citations';
        $this->title = 'Citation';
    }
    public function index()
    {
        $officer = Officer::where('status',1)->where('role',1)->select('id','name')->get();
        $cortadmin = Officer::where('status',1)->where('role',2)->select('id','name')->get();
        $data = array(
            'title' => 'View ' . $this->title,
            'page_title' => 'View ' . $this->title,
            'url'      => $this->url,
            'officer'      => $officer,
            'cortadmin'      => $cortadmin,
        );
        return view('court.' . $this->page . '.view')->with($data);
    }
    public function anydata(Request $request)
    {
        $anydata = [];
        $profile= Auth::guard('courtadmin')->user();
        $assine = AssineCitation::where('court_admin_id',$profile->id)->pluck('citation_id')->toArray();
        $anydata = app("App\Models\\" . $this->model)::whereIN('id',$assine)->orderBy('id', 'DESC')->where(function ($query) use ($request) {

            if (!empty($request['title'])) {
                $query->where('citation_number', 'LIKE', '%' . $request['title'] . '%')->orWhere('tag_number', 'LIKE', '%' . $request['title'] . '%');
            }
            
            if (!empty($request['status'])) {
                $query->where('status', $request['status']);
            }
        })->get();

        return Datatables::of($anydata)
            // ->addColumn('status', function ($anydata) {

            //     if ($anydata->status == 1) {
            //         $status = 2;
            //         $statusval = '<span onclick="changeStatus(' . $anydata->id . ',' . $status . ')"  class="btn btn-success btn-rounded btn-sm waves-effect waves-light">Active</span>';
            //     } else {
            //         $status = 1;
            //         $statusval = '<span onclick="changeStatus(' . $anydata->id . ',' . $status . ')" class="btn btn-danger btn-rounded btn-sm waves-effect waves-light">Deactive</span>';
            //     }
            //     return $statusval;
            // })

            ->addColumn('assine', function ($anydata) {

                    $assine = '<span onclick="assine(' . $anydata->id .')"  class="btn btn-success btn-rounded btn-sm waves-effect waves-light">Assine</span>';
                
                return $assine;
            })

            ->addColumn('status',function($anydata){
                $color = '';
                $text = '';
                if ($anydata->status == 1) {
                    $text = 'Pending';
                    $color = 'warning';
                }elseif($anydata->status == 2){
                    $text = 'Verified';
                    $color = 'success';
                }elseif($anydata->status == 3){
                    $text = 'Overdue';
                    $color = 'danger';
                }elseif($anydata->status == 4){
                    $text = 'Dispute';
                    $color = 'primary';
                }elseif($anydata->status == 5){
                    $text = 'Paid';
                    $color = 'success';
                }
                
                return '<div class="btn-group">
                            <button class="btn btn-'.$color.' dropdown-toggle btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                '.$text.'
                            </button>
                            
                        </div>';
            })

            ->addColumn('action', function ($anydata) {
                $file_name = "category";
                $encrypted_id = get_encrypted_value($anydata->id, true);
                $action = '
                        
                        <a href="' . url('/court-admin/' . $this->url . '/detail/' . $encrypted_id) . '"><i class="mdi mdi-eye text-info" data-original-title="Edit" data-toggle="tooltip" data-placement="bottom"></i></a>';
                return $action;
            })
            ->rawColumns(['status', 'action','assine'])
            ->addIndexColumn()->make(true);
    }
    public function delete(Request $request)
    {
        $id = $request['id'];
        $data = app("App\Models\\" . $this->model)::find($id);
        if ($data) {
            $data->status = 3;
            $data->save();
            $return_arr = array(
                'status' => 'success',
                'message' => $this->title . ' Deleted Sussessfully!',
            );
            return response()->json($return_arr);
        }
    }

    public function detail($id){
        $decrypted_id = get_decrypted_value($id, true);
        $citations = app("App\Models\\" . $this->model)::find($decrypted_id);
        $data = array(
            'title' => 'Deatil',
            'data' => $citations,

        );
        return view('court.' . $this->page . '.detail')->with($data);
    }
    public function changeStatus(Request $request)
    {
        $id   = $request['id'];
        $status = $request['status'];
        $data  =  app("App\Models\\" . $this->model)::find($id);
        if ($data) {
            $data->status = $status;
            $data->save();
            echo "Success";
        }
    }

    public function get_assine_form(Request $request)
    {
        try{
            $officer = Officer::where('status', 1)->where('role', 1)->select('id', 'name')->get();
$cortadmin = Officer::where('status', 1)->where('role', 2)->select('id', 'name')->get();
$getdata = AssineCitation::where('citation_id', $request['creat_id'])->first();

$data = '<input type="hidden" name="creat_id" value="' . $request['creat_id'] . '">
        <input type="hidden" name="assine_id" value="' . ($getdata->id ?? '') . '">
        <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Assine Retired Officer:</label>
            <select class="form-control" name="officer">
                <option value="">Assine Retired Officer</option>';
foreach ($officer as $officer_data) {
    $selected = ($getdata && $getdata->officer_id == $officer_data->id) ? 'selected' : '';
    $data .= '<option value="' . $officer_data->id . '" ' . $selected . '>' . $officer_data->name . '</option>';
}
$data .= '</select>
        </div>
        <div class="mb-3">
            <label for="message-text" class="col-form-label">Assine Court Admin:</label>
            <select class="form-control" name="court_admin">
                <option value="">Assine Court Admin</option>';
foreach ($cortadmin as $cortadmin_data) {
    $selected = ($getdata && $getdata->court_admin_id == $cortadmin_data->id) ? 'selected' : '';
    $data .= '<option value="' . $cortadmin_data->id . '" ' . $selected . '>' . $cortadmin_data->name . '</option>';
}
$data .= '</select>
        </div>';

            $return_arr = array(
                'status' => 1,
                'data' => $data,
            );
            return response()->json($return_arr);
        }catch (\Exception $e) {
            DB::rollback();
            $error_message = $e->getMessage();
            p($error_message);
            return back()->withInput()->withErrors($error_message);
        }
    }

    public function assine_citations(Request $request){
        try{
            if(!empty($request['assine_id'])){
                $data = AssineCitation::find($request['assine_id']);
                if(empty($data)){
                    $data = new AssineCitation;
                }
            }else{
                $data = new AssineCitation;
            }
            
            $data->citation_id = $request['creat_id'];
            $data->officer_id = $request['officer'];
            $data->court_admin_id = $request['court_admin'];
            $data->save();
            
            $success_msg = 'citations assine Successfully.';
            return redirect('admin/' . $this->url . '')->withSuccess($success_msg);
        }catch (\Exception $e) {
            DB::rollback();
            $error_message = $e->getMessage();
            p($error_message);
            return back()->withInput()->withErrors($error_message);
        }

    }
}