<?php

namespace App\Http\Controllers;

use App\Models\EtekafUsers;
use App\Models\QuranSchools;
use App\Services\Pay;
use App\Services\SMS;
use Illuminate\Http\Request;

class Payment extends Controller
{
    public function check(Request $request){
        $track_id = $request->trackId;
        if(Pay::verify($track_id)){
            $item = EtekafUsers::where('track_id', $track_id)->first();
            $item -> update(['payment_status' => 'approved']);
            SMS::send_success($item -> phone_number , $item -> location , $item -> track_id);
            if(!is_null($item -> quran_school)){
                QuranSchools::where('slug', $item -> quran_school)->increment('now_capacity');
            }
            return redirect() -> route('form', [
                'completed' => 'success'
            ]) ;
        }else{
            $item = EtekafUsers::where('track_id', $track_id)->first();
            $item -> delete();
            return redirect() -> route('form' , [
                'payment_fail' => 'fail'
            ]);
        }
    }
}
