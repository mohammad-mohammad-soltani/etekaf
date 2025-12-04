<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SMS
{
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
