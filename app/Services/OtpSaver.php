<?php

namespace App\Services;

use Illuminate\Support\Facades\Redis;

class OtpSaver
{
    public static function save($phone , $otp){
        Redis::setex("verify_code:$phone", 180, $otp);
    }
    public static function exist($phone)
    {
        return Redis::exists("verify_code:$phone");
    }
    public static  function verifyOtp($phone, $otp_in)
    {
        $stored = Redis::get("verify_code:$phone");

        if (!$stored) {
            return 'otp_expired';
        }

        if ($stored == $otp_in) {
            Redis::del("verify_code:$phone");
            return true;
        }

        return false;
    }
}
