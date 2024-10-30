<?php

namespace App\Http\Controllers\driver\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Driver;
use Illuminate\Support\Facades\Hash;
use Validator;

class LoginController extends Controller
{
    public function index(){
        $data = array(
            'saveurl' =>url('/driver-admin/login-save'),
            'title' =>"Driver Login",
        );
        return view('driver.auth/login')->with($data);
    }

    public function register(){
        $data = array(
            'saveurl' =>url('/driver-admin/register-save'),
            'title' =>"Driver Login",
        );
        return view('driver.auth/register')->with($data);
    }

    public function register_save(Request $request)
    {
        // p($request->role);
        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'email'     => 'required|unique:drivers,email,3,status',
            'password'  => 'required',
        ],[
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.unique' => 'This email address has already been assigned to a member. Please use a different email if you are trying to create a new account.',
            'password.required' => 'The password field is required.',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => '0', 'message' => $validator->errors()->first()], 200);
        }
        try {

            $otpnum = rand(11111, 99999);
            if (!empty($temp_user)) {
                $newUser = Driver::where('email', $request['email'])->first();
            } else {
                $newUser = new Driver;
            }
            $newUser->name             = $request->name;
            $newUser->email            = $request->email;
            $newUser->password         = Hash::make($request->password);
            $newUser->phone             = $request->phone;
            $newUser->save();

            // $page = EmailPage::find(18);
            // $mailData = [
            //     'otp' => $otpnum,
            //     'user' => $newUser->name,
            //     'message' => $page->description,
            //     'subject' => 'New Member Verfication'
            // ];

            // Mail::to($newUser->email)->send(new VarifyEmail($mailData));
            // $otp_user = UserOtp::where('email', $newUser->email)->first();
            // if (!empty($otp_user)) {
            //     $userotp = UserOtp::find($otp_user->id);
            // } else {
            //     $userotp = new UserOtp;
            // }

            // $userotp->email        = $request->email;
            // $userotp->otp           = $otpnum;
            // $userotp->save();




            return redirect('/driver-admin')->withSuccess("You are successfully logged in");


            //otp
            // $otp_responce = send_otp($request->email);

            exit;
        } catch (\Exception $e) {
            $error_message = $e->getMessage();
            // p($error_message);
            return redirect()->back()->withInput()->withErrors("Please Enter valid Email Address");
        }
    }

    public function save(Request $request) {
          

      $email =$request['user_email'];
      $password = $request['user_password'];
      
      $admin = Driver::where('email',$email)->where('status','!=',3)->first();
     

      if ($admin!="") {
        if($admin->status == 1){
          if (Auth::guard('driveradmin')->attempt(['email' => $email, 'password' => $password, 'status' => 1])) {
            $user = Auth::guard('driveradmin')->user();
            
              return redirect('/driver-admin/dashboard')->withSuccess("You are successfully logged in");
            }
            else{
             
              return redirect()->back()->withInput()->withErrors("Invalid Password");
            }
        }else{
          return redirect()->back()->withInput()->withErrors("driver Admin is deactivated by Admin");
        }
          
        
          
      
      }else{
              return redirect()->back()->withInput()->withErrors("Please Enter valid Email Address");
          }
    }

    public function change_password(){
      $data = array(
        'title' =>'Change Password', 
        'saveurl' =>route('driver_change_password_save'), 
      );
      return view('driver.auth.change_password')->with($data);
    }

    public function change_password_save(Request $request)
    {
       $admin_id = Auth::guard('driveradmin')->user()->id;
       
       $adminDetails = Driver::where(['id' => $admin_id])->first();

       if(Hash::check($request->get('current-password'), $adminDetails['password'])){
        $values=array(
              'password'          => Hash::make($request->get('new-password')),
        );

        $validatior = Validator::make($request->all(), [
            'current-password'          => 'required',
            'new-password'              => 'required|min:6|max:12|different:current-password',
            'new-password_confirmation' => 'required|min:6|max:12|same:new-password'
        ], [
            'new-password_confirmation.same' => 'The new password and new confirm password are not the same.',
            'new-password.different' => "New Password can't be same as current password",
        ]);

        if ($validatior->fails())
        {
                return redirect()->back()->withInput()->withErrors($validatior);

        } else {

          Driver::where('id', $admin_id)->update($values);
            return redirect()->back()->withSuccess("Password changed successfully!");

        }

       } else {
            return redirect()->back()->withErrors("Incorrect current password. Please try again.");
       }
    }

    public function view_profile(){
      $profile= Auth::guard('driveradmin')->user();
      $data = array(
        'title' =>'Update Profile', 
        'saveurl' =>route('driver_update_profile'), 
        'profile' => $profile,
      );
      return view('driver.auth.profile_updeate')->with($data);
    }

    public function update_profile(Request $request){
        $profile= Auth::guard('driveradmin')->user();
        if ($profile!="") {
            if(!empty($request->image)) {
                $image = $request->file('image');
                $img_name = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
                $request->file('image')->move("uploads/profile/driver", $img_name);
                $profile->profile = 'uploads/profile/driver/'.$img_name;
            }

            $profile->name  = $request['name'];
            $profile->email  = $request['user_email'];
            $profile->phone      = $request['phone'];
            
            $profile->save();
            return back()->withSuccess("Profile Updated Successfully.");
         }
         else{
            return back()->withInput()->withErrors("Something went wrong.");
        }
    }

  
    public function logout()
    {
        auth()->guard('driveradmin')->logout();
        
        return redirect()->route('driverlogin');
    }
}
