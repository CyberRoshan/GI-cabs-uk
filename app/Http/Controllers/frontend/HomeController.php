<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Testimonial;
use App\Models\Setting;
use App\Models\Banner;
use App\Models\ContactEnquery;
use App\Models\AriaToAirport;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use App\Models\Page;
use App\Models\Blog;
use App\Models\Fleet;
use App\Models\AirportTransfer;
use Validator;

class HomeController extends Controller
{
    public function index(){
        $faq = Faq::where('status',1)->orderBy('id')->get();
        $fleet = Fleet::where('status',1)->get();
        $service = Service::where('status',1)->get();
        $banner = Banner::where('status',1)->get();
        $testimonial = Testimonial::where('status',1)->get();
        $blog = Blog::where('status',1)->orderBy('id','DESC')->limit(3)->get();
        $data = array(
            'title' => 'Home',
            'faq' => $faq,
            'fleet' => $fleet,
            'service' => $service,
            'banner' => $banner,
            'blog' =>$blog,
            'testimonial' => $testimonial,
        );
        return view('frontend.index', $data);
    }

    public function login_save(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'citation_number' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['Message' => $validator->errors()->first()], 400);
        }

        try {
            $userlogin = Citation::where('citation_number', $request->citation_number)->first();
            if (!empty($userlogin)) {
                if (Auth::loginUsingId($userlogin->id)) {
                    // p($request->all());
    
                    $user = Auth::guard('web')->user();
    
                    return response()->json(
                        [
                            'message' => 'login successfully.',
                            'status' => 1,
    
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
            }else{
                return response()->json(
                    [
                        'message' => 'Citation number not found.',
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

    public function airport_detail($id){
        $file = AirportTransfer::where('slug',$id)->first();
        $fleet = Fleet::where('status', 1)->get();
        $faq = Faq::where('status', 1)->orderBy('id')->get();
        $service = Service::where('status', 1)->get();
        $banner = Banner::where('status', 1)->get();
        $testimonial = Testimonial::where('status', 1)->get();
        $data = array(
            'title' => $file->title,
            'file' => $file,
            'fleet' => $fleet,
           'faq' => $faq,
           'service' => $service,
           'banner' => $banner,
           'testimonial' => $testimonial,
        );
        return view('frontend.aria_detail', $data);
    }

    
    public function airport_sub_detail($pid,$id){
        $file = AirportTransfer::where('slug',$pid)->first();
        $fleet = Fleet::where('status', 1)->get();
        $faq = Faq::where('status', 1)->orderBy('id')->get();
        $service = Service::where('status', 1)->get();
        $banner = Banner::where('status', 1)->get();
        $testimonial = Testimonial::where('status', 1)->get();
        $data = array(
            'title' => $file->title,
            'file' => $file,
            'fleet' => $fleet,
           'faq' => $faq,
           'service' => $service,
           'banner' => $banner,
           'testimonial' => $testimonial,
        );
        return view('frontend.aria_sub_detail', $data);
    }

    public function about(){
        $faq = Testimonial::where('status',1)->orderBy('id')->get();
        $data = array(
            'title' => 'About Us',
            'faq' => $faq,
        );
        return view('frontend.about', $data);
    }

    public function aria_detail($id){
        $file = AriaToAirport::where('slug',$id)->first();
        $data = array(
            'title' => $file->tilte,
            'file' => $file,
        );
        return view('frontend.aria_detail', $data);
    }

    public function contact(){
        $setting = Setting::first();
        $data = array(
            'title' => 'Contact Us',
            'setting' => $setting,
        );
        return view('frontend.contact', $data);
    }

    public function term(){
        $file = Page::find(2);
        $data = array(
            'title' => 'terms-&-condition',
            'file' => $file,
        );
        return view('frontend.terms_condition', $data);
    }
    public function legal(){
        $file = Page::find(3);
        $data = array(
            'title' => $file->title,
            'file' => $file,
        );
        return view('frontend.legal', $data);
    }
    public function privacy(){
        $file = Page::find(1);
        $data = array(
            'title' => 'Privacy Policy',
            'file' => $file,
        );
        return view('frontend.privacy', $data);
    }

    public function contact_enquery(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'email'     => 'required',
            'message'   => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['Message' => $validator->errors()->first()], 400);
        }
        try {
            $newUser                   = new ContactEnquery;
            $newUser->name             = $request->name;
            $newUser->email            = $request->email;
            $newUser->message      = $request->message;
            $newUser->save();

            return response()->json([
                'message' => 'Your request send successfully.', 'status' => 1
            ], 200);
            exit;
        } catch (\Exception $e) {
            $error_message = $e->getMessage();
            // p($error_message);
            return response()->json([
                'message' => $error_message,
                'status' => 0
            ], 500);
            exit;
        }
    }

}
