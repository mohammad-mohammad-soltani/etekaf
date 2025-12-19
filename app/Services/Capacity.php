<?php

namespace App\Services;

use App\Models\EtekafUsers;

class Capacity
{

    public static function have_capacity($location){
        $capacity = [
            'haniyeh' => 130,
            'safieddine' => 90,
            'mughniyeh' => 130,
            'deif' => 175,
            'sinwar' => 175,
            'kuntar' => 60,
            'muhandis' => 150,
            'soleimani' => 100,
            'nasrallah' => 0,
            'yamen' => 175,
        ];
        return $capacity[$location] -  EtekafUsers::where('location', $location)->count();

    }

}
