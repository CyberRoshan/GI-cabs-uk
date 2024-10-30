<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Timezone;
use App\Models\Citation;
use App\Models\AssineCitation;
use App\Models\Officer;
use App\Models\UserDetail;
use App\Models\VenderOtherDocument;
use App\Models\Qualification;
use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Exception;
use Cache;
use Illuminate\Support\Facades\Auth;
use Validator;
use Mail;
use DB;
use App\Mail\WelcomeEmail;
use App\Mail\VarifyEmail;
use App\Mail\RequestEmail;

class VenderController extends Controller
{
    public function signin(){
        $data = array(
            'title' => 'Sign In',
        );
        return view('frontend.vender.signin',$data);
    }
    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['Message' => $validator->errors()->first()], 400);
        }

        try {
            $remember = $request->has('remember');
            if (Auth::guard('vender')->attempt(['email' => $request->email, 'password' => $request->password, 'role' => 1, 'status' => 1],$remember)) {
                $user = Auth::guard('vender')->user();
                if(!empty($request->remember)) {
                    //COOKIES for username
                    setcookie ("user_login",$request->email,time()+ (10 * 365 * 24 * 60 * 60));
                    //COOKIES for password
                    setcookie ("userpassword",$request->password,time()+ (10 * 365 * 24 * 60 * 60));
                    setcookie ("remember",$request->remember,time()+ (10 * 365 * 24 * 60 * 60));
                }else{
                    if(isset($_COOKIE["user_login"])) {
                        setcookie ("user_login","");
                        setcookie ("remember","");
                        if(isset($_COOKIE["userpassword"])) {
                            setcookie ("userpassword","");
                        }
                    }
                           
                } 

                return response()->json(
                    [
                        'message' => 'login successfully.',
                        'status' => 1
                    ],
                    200
                );
            } else {
                return response()->json(
                    [
                        'message' => 'Invalid credentials.',
                        'status' => 2
                    ],
                    201
                );
            }
        } catch (\Exception $e) {
            $error_message = $e->getMessage();
            return response()->json(['status' => 2, 'message' => $error_message], 500);
            exit;
        }
    }

    public function logout()
    {
        auth()->guard('vender')->logout();

        return redirect()->route('signin');
    }

    public function dashboard(){
        $user = Auth::guard('vender')->user();
        $datas = AssineCitation::where('officer_id',$user->id)->pluck('citation_id')->toArray();
        $citations = Citation::whereIn('id',$datas)->orderBy('id','DESC')->get();

        $Success = Citation::whereIn('id',$datas)->orderBy('id','DESC')->where('status',2)->count();
        $Pending = Citation::whereIn('id',$datas)->orderBy('id','DESC')->where('status',1)->count();
        $Overdue = Citation::whereIn('id',$datas)->orderBy('id','DESC')->where('status',3)->count();
        $total = Citation::whereIn('id',$datas)->orderBy('id','DESC')->count();
        // p($datas);
        $data = array(
            'title' => 'Dashboard',
            'data' => $citations,
            'Success' => $Success,
            'Pending' => $Pending,
            'Overdue' => $Overdue,
            'total' => $total,
        );
        return view('frontend.vender.dashboard', $data);
    }

    public function forgot_password()
    {
        $data = array(
            'title' => 'Forgot Password',

        );
        return view('frontend.vender.forgot_password')->with($data);
    }

    public function send_mail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'       => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->first()], 200);
        }

        try {

            $user = Officer::where('email', $request->email)->where('status', 1)->first();

            if (!empty($user)) {
               
                $mailData = [
                    'button' => '<a href="'.url('/reset_password/'.get_encrypted_value($user->id, true)).'"><button type="button" class="btn btn-primary btn-block fa-lg log-in">Reset Password</button></a>',
                    'user_name' => $user->name,
                    'message' => 'Pls click this link and reset password.',
                ];
                Mail::to($user->email)->send(new VarifyEmail($mailData));
                

                $success_msg = "Otp Send Your Register Email Address.";
                return response()->json(
                    [
                        'message' => $success_msg,
                        'email' => get_encrypted_value($request->email, true),
                        'status' => 1,
                    ],
                    200
                );
                exit;
            } else {
                $error_msg = "Invalid Email Address.";
                return response()->json([
                    'message' => $error_msg,
                    'status' => 0,
                ], 200);
                exit;
            }
        } catch (\Exception $e) {
            return $e->getMessage();
            return response()->json(['message' => 'Something went wrong.', 'status' => '0', 'data' => ''], 200);
            exit;
        }
    }

    public function reset_password($id)
    {
        $data = array(
            'title' => 'Reset Password',
            'id' => get_decrypted_value($id, true),
        );
        return view('frontend.vender.reset_password')->with($data);
    }

    public function reset_password_save(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'password'         => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => $validator->errors()->first()], 400);
        }

        try {
            $password = $request->password;
            // p($request['user_id']);
            
            $user = Officer::find($request['user_id']);
            // p($user);

            if (!empty($user)) {
                $user->password = \Hash::make($password);
                $user->update();
                $success_msg = 'Password changed successfully.';

                return response()->json(
                    [
                        'message' => $success_msg,
                        'status' => 1
                    ],
                    200
                );
                exit;
            } else {
                $error_msg = 'Password not changed.';
                return response()->json([
                    'message' => $error_msg,
                    'status' => '0',
                ], 201);
                exit;
            }
        } catch (\Exception $e) {
            $error_message = $e->getMessage();
            return response()->json(['message' => $error_message, 'status' => '0'], 500);
            exit;
        }
    }

    public function change_password(){
        $data = array(
            'title' => 'Change Password',
        );
        return view('frontend.vender.change_password')->with($data);
    }

    public function change_password_save(Request $request)
    {
       $admin_id = Auth::guard('vender')->user()->id;
       
       $adminDetails = Officer::where(['id' => $admin_id])->first();

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

            Admin::where('id', $admin_id)->update($values);
            return redirect()->back()->withSuccess("Password changed successfully!");

        }

       } else {
            return redirect()->back()->withErrors("Incorrect current password. Please try again.");
       }
    }

    public function change_profile(){
        $admin_id = Auth::guard('vender')->user()->id;
       
       $profile = Officer::where(['id' => $admin_id])->first();
        $data = array(
            'title' => 'Change Profile',
            'profile' => $profile,
        );
        return view('frontend.vender.change_profile')->with($data);
    }

    public function change_profile_save(Request $request){
        $profile= Auth::guard('vender')->user();
        if ($profile!="") {
            if(!empty($request->image)) {
                $image = $request->file('image');
                $img_name = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
                $request->file('image')->move("uploads/profile", $img_name);
                $profile->profile = 'uploads/profile/'.$img_name;
            }
            $profile->save();
            return back()->withSuccess("Profile Updated Successfully.");
         }
         else{
            return back()->withInput()->withErrors("Something went wrong.");
        }
    }

    public function citations(){
        $user = Auth::guard('vender')->user();
        $datas = AssineCitation::where('officer_id',$user->id)->pluck('citation_id')->toArray();
        $citations = Citation::whereIn('id',$datas)->orderBy('id','DESC')->get();
        $data = array(
            'title' => 'Citations',
            'data' => $citations,
        );
        return view('frontend.vender.citations', $data);
        
    }

    public function citation_detail($id){
        $decrypted_id = get_decrypted_value($id, true);
        $citations = Citation::find($decrypted_id);
        $data = array(
            'title' => 'Citations',
            'data' => $citations,
        );
        return view('frontend.vender.citation_details', $data);
        
    }
    public function disputes(){
        $data = array(
            'title' => 'Disputes',
        );
        return view('frontend.vender.disputes', $data);
        
    }

    public function creation_persnol_info(Request $request){
        try{
            // p($request->all());
            $data =  Citation::find($request['creation_id']);
            $data->vehicle_name = $request['name'];
            $data->vehicle_address = $request['address'];
            $data->city = $request['city'];
            $data->state = $request['state'];
            $data->save();

            $return_arr = array(
                'status' => 1,
                'message' => 'Personal Info update successfully',
            );
            return response()->json($return_arr);

        }catch (\Exception $e) {
            DB::rollback();
            $error_message = $e->getMessage();
            
            $return_arr = array(
                'status' => 0,
                'message' => $error_message,
            );
            return response()->json($return_arr);
        }
    }
    public function add_note(Request $request){
        try{
            // p($request->all());
            $data =  Citation::find($request['creation_id']);
            // p($request['note']);
            $data->note = $request['note'];
            $data->save();

            $return_arr = array(
                'status' => 1,
                'message' => 'Node Add successfully',
            );
            return response()->json($return_arr);

        }catch (\Exception $e) {
            DB::rollback();
            $error_message = $e->getMessage();
            
            $return_arr = array(
                'status' => 0,
                'message' => $error_message,
            );
            return response()->json($return_arr);
        }
    }

    public function approve_citations($id){
        
        $citations = Citation::find($id);
        $citations->status = 2;
        $citations->save();
        $data = array(
            'title' => 'Citations',
            'data' => $citations,
        );
        return redirect()->back();
    }
    public function send_request_mail($id){
        $user = Auth::guard('vender')->user();
        $citations = Citation::find($id);
        $mailData = [
            'data' => $citations,
            'user' => $user,
            'subject' => 'Request for Personal Information Regarding Red Light Violation'
        ];

        Mail::to($user->email)->send(new RequestEmail($mailData));
        return redirect()->back();
    }

    public function search_data(Request $request){
        try{
            // p($request->all());
           
            $user = Auth::guard('vender')->user();
            $datas = AssineCitation::where('officer_id',$user->id)->pluck('citation_id')->toArray();
            $anydata = Citation::whereIn('id',$datas)->orderBy('id', 'DESC')->where(function ($query) use ($request) {
                if (!empty($request['search'])) {
                    $query->where('citation_number', 'LIKE', '%' . $request['search'] . '%');
                }  
                
                if (!empty($request['fromDate']) && !empty($request['toDate'])) {
                    $query->where('issue_date','>=',$request['fromDate'])->where('issue_date','<=',$request['toDate']);
                }
            })->get();
            
            $data = '';
            foreach($anydata as $any_data){
                $text = '';
                
                if ($any_data->status == 1) {
                    $text = 'Pending';
                    
                }elseif($any_data->status == 2){
                    $text = 'Verified';
                    
                }elseif($any_data->status == 3){
                    $text = 'Overdue';
                   
                }elseif($any_data->status == 4){
                    $text = 'Dispute';
                    
                }elseif($any_data->status == 5){
                  $text = 'Paid';
                  
                }
                $data .= '
                    <tr class="citation-row" data-status="'.strtolower($any_data->status) .'">
                        <th scope="row">'.$any_data->citation_number.'</th>
                        <td>'.$any_data->issue_date.'</td>
                        <td>'.$any_data->offence_description.'</td>
                        <td><div class="'.strtolower($any_data->status).'">'.$text.'</div></td>
                        <td>$'.$any_data->fine_amount.'</td>
                        <td>'.$any_data->issue_date.'</td>
                        <td><a href="'.url('/officer/citation-detail/'.get_encrypted_value($any_data->id, true)).'">View</a></td>
                    </tr>';
            }

            $return_arr = array(
                'status' => 1,
                'data' => $data,
            );
            return response()->json($return_arr);

        }catch (\Exception $e) {
            DB::rollback();
            $error_message = $e->getMessage();
            
            $return_arr = array(
                'status' => 0,
                'message' => $error_message,
            );
            return response()->json($return_arr);
        }
    }

}
