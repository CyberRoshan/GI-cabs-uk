<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DataTables;
use Validator;
use File;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    private $model;
    private $table;
    private $page;
    private $url;
    private $title;

    public function __construct()
    {
        // Initialize the global variable in the constructor
        $this->model = 'Service';
        $this->table = 'services';
        $this->page = 'service';
        $this->url = 'service';
        $this->title = 'Service';
    }

    public function add(Request $request, $id = Null)
    {
        $decrypted_id = get_decrypted_value($id, true);
        $getdata = app("App\Models\\" . $this->model)::find($decrypted_id);
        if ($id != "") {
            $saveurl = url('admin/' . $this->url . '/save/' . $id);
            $button = 'Update';
            $page_title = 'Update ' . $this->title;
        } else {
            $saveurl = url('admin/' . $this->url . '/save');
            $button = 'Add';
            $page_title = 'Add ' . $this->title;
        }
        $data = array(
            'getdata'    => $getdata,
            'saveurl'    => $saveurl,
            'button'     => $button,
            'title'      => $page_title,
            'url'      => $this->url,
        );
        return view('admin.' . $this->page . '.add')->with($data);
    }
    public function save(Request $request, $id = NUll)
    {
        if (!empty($id)) {
            $decrypted_id = get_decrypted_value($id, true);
            $data = app("App\Models\\" . $this->model)::find($decrypted_id);
            $success_msg = $this->title.' Updated Successfully.';
            $nameValidator = 'required|unique:' . $this->table . ',title,' . $decrypted_id . ',id,status,1';
            $Validatior = Validator::make($request->all(), [
                'title' => $nameValidator,
            ]);
        } else {
            $mod = app("App\Models\\" . $this->model);
            $data          = new $mod;
            $success_msg = $this->title.' Added Successfully.';
            $nameValidator = 'required|unique:' . $this->table . '';
            $Validatior = Validator::make($request->all(), [
                'title' => $nameValidator,
                
            ]);
        }

        if ($Validatior->fails()) {
            return back()->withInput()->withErrors($Validatior);
        } else {

            DB::beginTransaction();
            try {

                if ($request['image']!="") {
                    $file = $request->file('image');
                    $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                    $ext = pathinfo($name, PATHINFO_EXTENSION);
                    $extensions = ['jpg', 'jpeg', 'png', 'JPEG', 'PNG','JPG',];
                    if(! in_array($ext, $extensions))
                    {
                        $status = 'File type is not allowed you have uploaded. Please upload any image !';
                        return back()->withInput()->withErrors($status);                   
                    }
                    $request->file('image')->move("uploads/category", $name);
                    $data->image = 'uploads/category/'.$name;
                }
                $data->title = $request['title'];
                $data->short_description = $request['short_description'];
                $data->description = $request['editor1'];
                $data->slug = Str::slug($request['title']);;
                $data->save();
            } catch (\Exception $e) {
                DB::rollback();
                $error_message = $e->getMessage();
                p($error_message);
                return back()->withInput()->withErrors($error_message);
            }
            DB::commit();
        }
        return redirect()->route('' . $this->url . '')->withSuccess($success_msg);
    }
    public function index()
    {
        $data = array(
            'title' => 'View ' . $this->title,
            'page_title' => 'View ' . $this->title,
            'url'      => $this->url,
        );
        return view('admin.' . $this->page . '.view')->with($data);
    }
    public function anydata(Request $request)
    {
        $anydata = [];
        $anydata = app("App\Models\\" . $this->model)::orderBy('id', 'DESC')->where('status', '<', 3)->where(function ($query) use ($request) {

            if (!empty($request['title'])) {
                $query->where('question', 'LIKE', '%' . $request['title'] . '%');
            }
            
            if (!empty($request['status'])) {
                $query->where('status', $request['status']);
            }
        })->get();

        return Datatables::of($anydata)
            ->addColumn('status', function ($anydata) {

                if ($anydata->status == 1) {
                    $status = 2;
                    $statusval = '<span onclick="changeStatus(' . $anydata->id . ',' . $status . ')"  class="btn btn-success btn-rounded btn-sm waves-effect waves-light">Active</span>';
                } else {
                    $status = 1;
                    $statusval = '<span onclick="changeStatus(' . $anydata->id . ',' . $status . ')" class="btn btn-danger btn-rounded btn-sm waves-effect waves-light">Deactive</span>';
                }
                return $statusval;
            })

            ->addColumn('action', function ($anydata) {
                $file_name = "category";
                $encrypted_id = get_encrypted_value($anydata->id, true);
                $action = '<a href="' . url('/admin/' . $this->url . '/add/' . $encrypted_id) . '"><i class="fa fa-edit" data-original-title="Edit" data-toggle="tooltip" data-placement="bottom"></i></a> &nbsp;&nbsp;  
                        
                        <i class="fa fa-trash-o text-danger delete-button" id="deletebtn" data-id="' . $anydata->id . '" data-original-title="Delete" data-toggle="tooltip" data-placement="bottom"></i>';
                return $action;
            })
            ->rawColumns(['status', 'action'])
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
}
