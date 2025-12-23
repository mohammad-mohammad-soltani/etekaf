<?php

namespace App\Services;

use App\Models\EtekafUsers;

class Capacity
{

    public static function have_capacity($location){
        $capacity = [
            'haniyeh' => 120,
            'safieddine' => 80,
            'mughniyeh' => 120,
            'deif' => 165,
            'sinwar' => 165,
            'kuntar' => 50,
            'muhandis' => 140,
            'soleimani' => 90,
            'nasrallah' => 0,
            'yamen' => 165,
        ];
        return $capacity[$location] -  EtekafUsers::where('location', $location)->count();

    }
    public static function have_capacity_percentage($location){
        $capacity = [
            'haniyeh' => 120,
            'safieddine' => 80,
            'mughniyeh' => 120,
            'deif' => 165,
            'sinwar' => 165,
            'kuntar' => 50,
            'muhandis' => 140,
            'soleimani' => 90,
            'nasrallah' => 0,
            'yamen' => 165,
        ];
        try {
            return (EtekafUsers::where('location', $location)->count() / $capacity[$location]) * 100;

        }catch (\DivisionByZeroError $exception){
            return 0;
        }
    }

}
