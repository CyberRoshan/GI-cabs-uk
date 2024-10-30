<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(){
        $service = Service::where('status',1)->orderBy('id','DESC')->get();
        $data = array(
            'title' => 'Service',
            'service' => $service
        );
        return view('frontend.service', $data);
    }

    public function detail($id){
        $cat = Service::where('slug',$id)->first();
        $data = array(
            'title' => 'Service',
            'file' => $cat,
        );
        return view('frontend.service_detail', $data);
    }
}
