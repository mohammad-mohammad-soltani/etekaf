<?php

namespace App\Services;

use App\Models\EtekafUsers;

class Ads
{
    public static function percentage($way){
        $count_all = EtekafUsers::count();
        $count_way = EtekafUsers::where('industry', $way)->count();
        try{
            return ($count_way / $count_all) * 100;
        }catch (\DivisionByZeroError $exception){
            return 0;
        }
    }
}
