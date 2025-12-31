<?php

namespace App\Services;

use App\Models\EtekafUsers;

class Capacity
{

    public static function have_capacity($location){
        $capacity = [
            'haniyeh' => 124,
            'safieddine' => 84,
            'mughniyeh' => 124,
            'deif' => 169,
            'sinwar' => 169,
            'kuntar' => 54,
            'muhandis' => 144,
            'soleimani' => 94,
            'nasrallah' => 110,
            'yamen' => 170,
        ];
        return $capacity[$location] -  EtekafUsers::where('location', $location)->count();

    }
    public static function have_capacity_percentage($location){
        $capacity = [
            'haniyeh' => 124,
            'safieddine' => 84,
            'mughniyeh' => 124,
            'deif' => 169,
            'sinwar' => 169,
            'kuntar' => 54,
            'muhandis' => 144,
            'soleimani' => 94,
            'nasrallah' => 110,
            'yamen' => 170,
        ];
        try {
            return (EtekafUsers::where('location', $location)->count() / $capacity[$location]) * 100;

        }catch (\DivisionByZeroError $exception){
            return 0;
        }
    }

}
