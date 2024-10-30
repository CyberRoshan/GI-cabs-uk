<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DataTables;
use Validator;
use File;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function add(Request $request, $id = Null)
    {
        $decrypted_id = get_decrypted_value($id, true);
        $getdata = User::find($decrypted_id);
        if ($id != "") {
            $saveurl = url('admin/user/save/' . $id);
            $button = 'Update';
            $page_title = 'Update Patient';
        } else {
            $saveurl = url('admin/user/save');
            $button = 'Add';
            $page_title = 'Add Patient';
        }
        $data = array(
            'getdata'    => $getdata,
            'saveurl'    => $saveurl,
            'button'     => $button,
            'title'      => $page_title,
        );
        return view('admin.user.add')->with($data);
    }
    public function save(Request $request, $id = NUll)
    {
        if (!empty($id)) {
            $decrypted_id  = get_decrypted_value($id, true);
            $data          = User::find($decrypted_id);
            $success_msg   = 'Patient Updated Successfully.';
            $nameValidator = 'required|unique:users,mobile,' . $decrypted_id . ',id,status,1';
            $Validatior = Validator::make($request->all(), [
                // 'phone' => $nameValidator,
            ]);
        } else {
            $data          = new User;
            $success_msg   = 'Patient Added Successfully.';
            $nameValidator = 'required|unique:users';
            $Validatior = Validator::make($request->all(), [
                'mobile' => $nameValidator,
                'password'              => 'required',
                'confirm_password' => 'required|same:password'
            ], [
                'confirm_password.same' => 'The password and confirm password are not the same.',
            ]);
        }

        if ($Validatior->fails()) {
            return back()->withInput()->withErrors($Validatior);
        } else {

            DB::beginTransaction();
            try {
                if ($request['image_base64'] != "") {
                    $input['image'] = $this->storeBase64($request->image_base64);
                    $data->profile = 'uploads/user/profile/' . $input['image'];
                }

                $rand = rand(11, 99);
                $data->name             = $request->name;
                // $data->middle_name             = $request->middle_name;
                // $data->last_name             = $request->last_name;
                $data->mobile           = $request->mobile;
                $data->country_code      = (int)$request['country_code'];
                $data->email            = $request->email;
                if ($request['password'] != "") {
                    $data->password      = Hash::make($request['password']);
                } elseif ($request['e_password'] != "") {
                    $data->password      = Hash::make($request['e_password']);
                }
                
                $data->save();
            } catch (\Exception $e) {
                DB::rollback();
                $error_message = $e->getMessage();
                p($error_message);
                return back()->withInput()->withErrors($error_message);
            }
            DB::commit();
        }
        return redirect()->route('user')->withSuccess($success_msg);
    }

    private function storeBase64($imageBase64)
    {
        list($type, $imageBase64) = explode(';', $imageBase64);
        list(, $imageBase64)      = explode(',', $imageBase64);
        $imageBase64 = base64_decode($imageBase64);
        $imageName = rand(11111, 99999) . '.png';
        $path = 'uploads/user/profile/' . $imageName;


        file_put_contents($path, $imageBase64);

        return $imageName;
    }
    public function index()
    {
        $data = array(
            'title' => 'View Customer',
            'page_title' => 'View Customer',
        );
        return view('admin.user.view')->with($data);
    }

    public function anydata(Request $request)
    {
        $anydata = [];
        $anydata = User::where('status', '<', 3)->orderBy('id', 'DESC')->where(function ($query) use ($request) {

            if (!empty($request['title'])) {
                $query->where('name', 'LIKE', '%' . $request['title'] . '%');
            }

            if (!empty($request['status'])) {
                $query->where('status', $request['status']);
            }
        })->get();


        return Datatables::of($anydata)

            ->addColumn('profile', function ($anydata) {
                if ($anydata['profile'] != "" || file_exists($anydata['profile'])) {
                    $img = url($anydata['profile']);
                } else {
                    $img = url('public/noimage.png');
                }
                return '<img style="border-radius: 50%;" alt="image" src=' . $img . ' width="35" height="35px">';
            })


            ->addColumn('phone', function ($anydata) {
                return isset($anydata->country_code) ? '+' . $anydata->country_code . ' ' . $anydata->mobile : $anydata->mobile;
            })
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
                $encrypted_id = get_encrypted_value($anydata->id, true);
                $action = '<a href="' . url('/admin/user/detail/' . $encrypted_id) . '"><i class="fa fa-eye text-info" title="View" data-toggle="tooltip" data-placement="bottom"></i></a>&nbsp;&nbsp;
                <a href="' . url('/admin/user/add/' . $encrypted_id) . '"><i class="fa fa-edit" title="Edit" data-toggle="tooltip" data-placement="bottom"></i></a> &nbsp;&nbsp;  
                        
                        <i class="fa fa-trash-o text-danger delete-button" id="deletebtn" data-id="' . $anydata->id . '" title="Delete" data-toggle="tooltip" data-placement="bottom"></i>';
                return $action;
            })
            ->rawColumns(['status', 'action', 'state_data', 'profile', 'total_referral', 'wallet', 'phone'])
            ->addIndexColumn()->make(true);
    }
    public function delete(Request $request)
    {
        $id = $request['id'];
        $data = User::find($id);
        if ($data) {
            $data->status = 3;
            $data->save();
            $return_arr = array(
                'status' => 'success',
                'message' => 'Patient Deleted Sussessfully!',
            );
            return response()->json($return_arr);
        }
    }

    public function changeStatus(Request $request)
    {
        $id   = $request['id'];
        $status = $request['status'];
        $data  =  User::find($id);
        if ($data) {
            $data->status = $status;
            $data->save();
            echo "Success";
        }
    }

    public function detail(Request $request, $id)
    {
        $decrypted_id = get_decrypted_value($id, true);

        $user = User::find($decrypted_id);
        // $refar = User::where('user_refral', $user->refar_code)->get();
        // p($user);
        $data = array(
            'title' => 'Customer Detail',
            'page_title' => 'Customer Detail',
            'user' => $user,

        );
        return view('admin.user.detail')->with($data);
    }
}
