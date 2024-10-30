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

class DriverController extends Controller
{
    private $model;
    private $table;
    private $page;
    private $url;
    private $title;

    public function __construct()
    {
        // Initialize the global variable in the constructor
        $this->model = 'Driver';
        $this->table = 'drivers';
        $this->page = 'driver';
        $this->url = 'driver';
        $this->title = 'Driver';
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
            $nameValidator = 'required|unique:' . $this->table . ',email,' . $decrypted_id . ',id,status,1';
            $Validatior = Validator::make($request->all(), [
                'email' => $nameValidator,
            ]);
        } else {
            $mod = app("App\Models\\" . $this->model);
            $data          = new $mod;
            $success_msg = $this->title.' Added Successfully.';
            $nameValidator = 'required|unique:' . $this->table . '';
            $Validatior = Validator::make($request->all(), [
                'email' => $nameValidator,
                
            ]);
        }

        if ($Validatior->fails()) {
            return back()->withInput()->withErrors($Validatior);
        } else {

            DB::beginTransaction();
            try {

                if ($request['profile'] != "") {
                    $file = $request->file('profile');
                    $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                    $request->file('profile')->move("uploads/setting", $name);
                    $data->profile = 'uploads/driver/'.$name;
                }

                if ($request['private_hire_driver_license'] != "") {
                    $file1 = $request->file('private_hire_driver_license');
                    $name1 = rand(11111, 99999) . '.' . $file1->getClientOriginalExtension();
                    $request->file('private_hire_driver_license')->move("uploads/driver", $name1);
                    $data->private_hire_driver_license = 'uploads/driver/'.$name1;
                }

                if ($request['private_hire_vehicle_license'] != "") {
                    $file2 = $request->file('private_hire_vehicle_license');
                    $name2 = rand(11111, 99999) . '.' . $file2->getClientOriginalExtension();
                    $request->file('private_hire_vehicle_license')->move("uploads/driver", $name2);
                    $data->private_hire_vehicle_license = 'uploads/driver/'.$name2;
                }

                if ($request['photo_license_badge'] != "") {
                    $file3 = $request->file('photo_license_badge');
                    $name3 = rand(11111, 99999) . '.' . $file3->getClientOriginalExtension();
                    $request->file('photo_license_badge')->move("uploads/driver", $name3);
                    $data->photo_license_badge = 'uploads/driver/'.$name3;
                }

                if ($request['DVLA_driving_license_front'] != "") {
                    $file4 = $request->file('DVLA_driving_license_front');
                    $name4 = rand(11111, 99999) . '.' . $file4->getClientOriginalExtension();
                    $request->file('DVLA_driving_license_front')->move("uploads/driver", $name4);
                    $data->DVLA_driving_license_front = 'uploads/driver/'.$name4;
                }

                if ($request['DVLA_driving_license_back'] != "") {
                    $file5 = $request->file('DVLA_driving_license_back');
                    $name5 = rand(11111, 99999) . '.' . $file5->getClientOriginalExtension();
                    $request->file('DVLA_driving_license_back')->move("uploads/driver", $name5);
                    $data->DVLA_driving_license_back = 'uploads/driver/'.$name5;
                }

                if ($request['MOT_certificate'] != "") {
                    $file6 = $request->file('MOT_certificate');
                    $name6 = rand(11111, 99999) . '.' . $file6->getClientOriginalExtension();
                    $request->file('MOT_certificate')->move("uploads/driver", $name6);
                    $data->MOT_certificate = 'uploads/setting/'.$name6;
                }

                if ($request['car_insurance_certificate'] != "") {
                    $file7 = $request->file('car_insurance_certificate');
                    $name8 = rand(11111, 99999) . '.' . $file7->getClientOriginalExtension();
                    $request->file('car_insurance_certificate')->move("uploads/setting", $name8);
                    $data->car_insurance_certificate = 'uploads/setting/'.$name8;
                }

                $data->email = $request['email'];
                $data->phone = $request['phone'];
                $data->address = $request['address'];
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
