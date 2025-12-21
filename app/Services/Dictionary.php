<?php

namespace App\Services;

class Dictionary
{
    public static function location($location){
        $locations = [
            'haniyeh' => 'اسمائیل هنیه',
            'safieddine' => 'هاشم صفی الدین',
            'mughniyeh' => 'عماد مغنیه',
            'deif' => 'محمد الضیف',
            'sinwar' => 'یحیی سنوار',
            'kuntar' => 'سمیر قنطار',
            'muhandis' => 'ابومهدی المهندس',
            'soleimani' => 'قاسم سلیمانی',
            'nasrallah' => 'سید حسن نصرالله',
            'yamen' => 'عبد الکریم الغماری',
        ];
        return $locations[$location];
    }
    public static function industry($industry){
        $industries = [
            'bus' => 'اتوبس',
            'banner' => 'بنر های سطح شهر',
            'friends' => 'دوستان',
            'social' => 'شبکه های اجتماعی'
        ];
        return $industries[$industry];
    }
    public static function job($job){
        if ($job === null) {
            return 'علاقه‌مند نیستم';
        }

        $jobs = [
            'security_officer' => 'انتظامات',
            'catering_supervisor' => 'سفره',
            'media_group' => 'رسانه',
        ];

        return $jobs[$job] ?? '---';
    }

}
