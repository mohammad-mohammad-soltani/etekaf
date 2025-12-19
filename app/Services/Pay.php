<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class Pay
{
    public static function start_payment($amount){
        $response = Http::post('https://gateway.zibal.ir/v1/request' , [
            'merchant' =>  'zibal',
            'amount' => $amount,
            'callbackUrl' => route('payment.callback'),
        ]);
        if($response->successful()){
            return $response['trackId'];
        }else{
            return false;
        }
    }
    public static function verify($trackId){
        $response = Http::post('https://gateway.zibal.ir/v1/verify' , [
            'merchant' =>  'zibal',
            'trackId' => $trackId,
        ]);
        return $response -> json()['result'] == 100 ||  $response -> json()['result'] == 200;
    }
}
