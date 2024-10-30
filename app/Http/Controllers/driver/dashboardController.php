<?php

namespace App\Http\Controllers\driver;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class dashboardController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'Dashboard',
            
        );
        return view('driver.dashboard')->with($data);
    }


    
}
