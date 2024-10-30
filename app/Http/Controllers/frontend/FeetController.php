<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fleet;

class FeetController extends Controller
{
    public function index(){
        $file = Fleet::where('status',1)->orderBy('id','DESC')->get();
        $data = array(
            'title' => 'Feet',
            'file' => $file
        );
        return view('frontend.fleet', $data);
    }

    public function detail($id){
        $fleet = Fleet::where('slug',$id)->first();
        $data = array(
            'title' => 'Feet',
            'data' => $fleet,
        );
        return view('frontend.fleet_detail', $data);
    }
}
