<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SMS
{
    public static array $patterns = [
        'kuntar' => '7bhs71gteg3tlee',
        'muhandis' => 'ijhdotrae8bo7gy',
        'yamen' => 'ukvkj9x9mnpgxnm',
        'nasrallah' => 'uvdgd2dnz5lvcmf',
        'sinwar' => 'tmk5htixhb0avfi',
        'soleimani' => 'f9iejgc9s0rwvlb',
        'mughniyeh' => '64fdmoo8cb52r1u',
        'safieddine' => '5tvmse997m0lavd',
        'haniyeh' => 'dy6ektqlznf867j',
        'deif' => '8dxh9gensf9w0qg',
    ];
    public static function send_success($phone,$location){
        $pattern = self::$patterns[$location];
        $response = Http::withHeaders([
            'Accept'       => 'application/json',
            'Content-Type' => 'application/json',
            'Api-Key'      => 'YTA5NTI2ZTktMTNlMS00NzFkLThlYmQtYTY5NjVmN2MwODJlMjRmOTJiYzE3ZjI5ZWJiOTFlNWE1OTEzNTgyOTc3OWY=',
        ])->post('https://api.iranpayamak.com/ws/v1/sms/pattern', [
            'code' => $pattern,
            'attributes' => [
                'code' => 1234,
            ],
            'recipient'     => $phone,
            'line_number'   => '50002178584000',
            'number_format' => 'english',
        ]);

        return $response->json();
        return "ok";
    }
    public static function SendOTP($phone, $otp)
    {
        $api_key = '7EwHcFUlr88Q5et0pKqqbIDxLtiQfJnQ3rKcsSoRSzM=';
        $pattern = '805541';
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $api_key,
            'Content-Type' => 'application/json',
        ])->post('https://api.mediana.ir/sms/v1/send/otp', [
            'recipient' => $phone,
            'otpCode' => strval($otp),
            'patternCode' => $pattern,
        ]);

        if ($response->successful()) {
            return [
                'success' => true,
            ];
        }
//        return false;
        return [
            'success' => false,
            'status' => 'error',
            'data' => $response->json(),
            'code' => $response->status(),
        ];
    }
}
