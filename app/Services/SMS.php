<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

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
    public static function send_success($phone,$location,$track_id){
        $pattern = self::$patterns[$location];
        $response = Http::withHeaders([
            'Content-Type'  => 'application/json',
            'Authorization' => 'YTBhYjFjYjAtMjE4MC00MTI5LWJjMWQtYTllNDI2M2NhY2YyYmM2ZGE4M2M0M2MzYTY4ZjcxZjNhZDkyMTk4NmY4YjQ=',
        ])->post('https://edge.ippanel.com/v1/api/send', [
            'sending_type' => 'pattern',
            'from_number'  => '+983000505',
            'code'         => $pattern,
            'recipients'   => [
                $phone,
            ],
            'params'       => [
                'code' => $track_id,
            ],
        ]);
//        Log::info($response->json());
        return $response->json();
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

//App\Services\SMS::send_success('09140275311' , 1234);
