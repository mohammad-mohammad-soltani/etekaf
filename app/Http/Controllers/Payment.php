<?php

namespace App\Http\Controllers;

use App\Models\EtekafUsers;
use App\Services\Pay;
use Illuminate\Http\Request;

class Payment extends Controller
{
    public function check(Request $request){
        $track_id = $request->trackId;
        if(Pay::verify($track_id)){
            $item = EtekafUsers::where('track_id', $track_id)->first();
            $item -> update(['payment_status' => 'approved']);
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
