<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Citation;
use App\Models\TimeSlot;
use App\Models\SlotTime;
use App\Models\RaiseDispute;
use App\Models\AssineCitation;
use App\Models\Officer;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserTicketController extends Controller
{
    public function index(){
        $user = auth()->guard('web')->user();
        $assine = AssineCitation::where('citation_id',$user->id)->first();
        $get_data = Citation::with('get_assine')->where('citation_number',$user->citation_number)->first();
        
        $all_data = Citation::where('citation_number',$user->citation_number)->get();
        $data = array(
            'title' => 'My Tickets',
            'data' => $all_data,
            'get_data' => $get_data,
            'assine' => $assine,
        );
        return view('frontend.search', $data);
    }

    public function payment(){
        $data = array(
            'title' => 'Payment',
        );
        return view('frontend.payment', $data);
    }

    public function select_date(Request $request){
        $user = Auth::guard('web')->user();
        $assine = AssineCitation::where('citation_id',$user->id)->first();
        $date = $request->date;
        
        $data = TimeSlot::where('date', $date)->where('user_id',$assine->court_admin_id)->pluck('id')->toArray();
        $rise = RaiseDispute::where('court_admin_id',$assine->court_admin_id)->pluck('slot_id')->toArray();
        
        $time_slot = SlotTime::whereNotIn('id',$rise)->whereIn('slot_date_id', $data)->get();
       
        $data_time = '';
        if(count($time_slot)>0){
            foreach($time_slot as $time){
                $data_time .= '<label class="rounded-0 text-white">
                <input type="radio" name="toggle" class="d-none">
                <span class="text-center d-block py-3" onclick="time_slot_data(\''.$time->start_time.'\', \''.$time->end_time.'\','.$time->id.')">'.$time->start_time.' to '.$time->end_time.'</span>
              </label>';
            }
        }else{
            $data_time = '<span style="text-align: center;margin-bottom: 20px;color: red;">Slot not available</span>';
        }
        
        
        $return_arr = array(
            'status' => 1,
            'data' => $data_time,
        );
        return response()->json($return_arr);
    }

    public function ticket_details($id){
        $decrypted_id = get_decrypted_value($id, true);
        $assine = AssineCitation::where('citation_id',$decrypted_id)->first();
        $get_data = Citation::with('get_assine')->find($decrypted_id);
        

        $data = array(
            'title' => 'Detail',
            'get_data' => $get_data,
            'assine' => $assine,
        );
        return view('frontend.ticket-details', $data);
    }

    public function slot_save(Request $request){
        try{
            $date = isset($request['date'])?$request['date']:carbon::now()->format('Y-m-d');
            // p($data);
            // p($request->all());
            $data = new RaiseDispute;
            $data->citation_id = $request['citation_id'];
            $data->court_admin_id = $request['admin_id'];
            $data->date = $date;
            $data->slot_id = $request['slot_id'];
            $data->time = '1';
            $data->start_time = $request['start_time'];
            $data->end_time = $request['end_time'];
            $data->name = $request['name'];
            $data->email = $request['email'];
            $data->phone = $request['phone'];
            $data->address = $request['address'];
            $data->description = $request['description'];
            $data->SAVE();

            $citation = Citation::find($request['citation_id']);
            $citation->status = 4;
            $citation->save();


            $return_arr = array(
                'status' => 1,
                'message' => 'Time slot add successfully',
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

    public function getDisabledDates()
    {
        $user = Auth::guard('web')->user();
        $assine = AssineCitation::where('citation_id', $user->id)->first();

        // Fetch the court admin officer for the current user
        $admin = Officer::find($assine->court_admin_id);

        // Get the current month and next month date range
        $startDate = Carbon::now()->startOfMonth()->format('Y-m-d'); // First day of the current month
        $endDate = Carbon::now()->addMonth()->endOfMonth()->format('Y-m-d'); // Last day of the next month

        // Fetch dates within the current and next month that need to be disabled
        $disabledDates = TimeSlot::where('date', '>=', now()->toDateString())->where('user_id', $admin->id)
            ->whereBetween('date', [$startDate, $endDate])
            ->pluck('date')
            ->toArray();

        return response()->json($disabledDates);
    }
}
