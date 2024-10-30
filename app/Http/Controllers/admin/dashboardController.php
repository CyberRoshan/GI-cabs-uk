<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Officer;
use App\Models\Loan;
use App\Models\ApplyLoan;
use App\Models\Page;
use App\Models\TransactionHistory;
use AmrShawky\LaravelCurrency\Facade\Currency;
use Carbon\Carbon;
use Session;
use Stripe;

class dashboardController extends Controller
{
    public function index(){

        $currentYear = Carbon::now()->year;
        $currentMonth = Carbon::now()->month;
        $currentWeek = Carbon::now()->week;

        $currentDate = Carbon::now();

        // $officer = Officer::where('status','<',3)->where('role',1)->count();
        // $court = Officer::where('status','<',3)->where('role',2)->count();
        
        
        $data = array(
            'title' => 'Dashboard',
            // 'officer'        => $officer,
            // 'court'  => $court,
        );
        return view('admin.dashboard')->with($data);
    }

   
}
