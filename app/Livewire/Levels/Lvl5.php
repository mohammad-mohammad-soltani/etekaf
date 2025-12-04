<?php

namespace App\Livewire\Levels;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Lvl5 extends Component
{
    #[Validate('required|regex:/^9\d{9}$/', message:["mobile_number.required" => "شماره همراه الزامی است", "mobile_number.regex" => "شماره همراه نامعتبر است"])]
    public $mobile_number;

    #[Validate('required|in:tehran,alborz,ardabil,isfahan,ilam,bushehr,babol,qom,qazvin,golestan,lahijan,mazandaran,markazi,hormozgan,hamedan,yazd,kermanshah,kerman,khuzestan,khoy,sistan,semnan,south_khorasan,razavi_khorasan,north_khorasan,fars,kashmir,kohgiluyeh,kurdistan,gilan,lorestan,zanjan', message:["province.required" => "انتخاب استان الزامی است", "province.in" => "استان نامعتبر است"])]
    public $province;

    #[Validate('required|regex:/^9\d{9}$/', message:["parent_mobile.required" => "شماره همراه والدین الزامی است", "parent_mobile.regex" => "شماره همراه والدین نامعتبر است"])]
    public $parent_mobile;

    #[Validate('required|string|max:150', message:["school_name.required" => "نام مدرسه الزامی است", "school_name.max" => "نام مدرسه نباید بیشتر از 150 کاراکتر باشد"])]
    public $school_name;

    public function render()
    {
        return view('livewire.levels.lvl5', [
            'provinces' => self::getProvinces(),
        ]);
    }

    public function next_step()
    {
        $this->validate();
        $this->dispatch('level_up' , ['phone_number' => $this -> mobile_number , 'parent_number' => $this -> parent_mobile , 'province' => $this -> province , 'school_name' => $this -> school_name]);
    }

    public static function getProvinces()
    {
        return [
            'tehran' => 'تهران',
            'alborz' => 'البرز',
            'ardabil' => 'اردبیل',
            'isfahan' => 'اصفهان',
            'ilam' => 'ایلام',
            'bushehr' => 'بوشهر',
            'babol' => 'بابل',
            'qom' => 'قم',
            'qazvin' => 'قزوین',
            'golestan' => 'گلستان',
            'lahijan' => 'لاهیجان',
            'mazandaran' => 'مازندران',
            'markazi' => 'مرکزی',
            'hormozgan' => 'هرمزگان',
            'hamedan' => 'همدان',
            'yazd' => 'یزد',
            'kermanshah' => 'کرمانشاه',
            'kerman' => 'کرمان',
            'khuzestan' => 'خوزستان',
            'khoy' => 'خوی',
            'sistan' => 'سیستان و بلوچستان',
            'semnan' => 'سمنان',
            'south_khorasan' => 'خراسان جنوبی',
            'razavi_khorasan' => 'خراسان رضوی',
            'north_khorasan' => 'خراسان شمالی',
            'fars' => 'فارس',
            'kashmir' => 'کاشمر',
            'kohgiluyeh' => 'کهگیلویه و بویراحمد',
            'kurdistan' => 'کردستان',
            'gilan' => 'گیلان',
            'lorestan' => 'لرستان',
            'zanjan' => 'زنجان',
        ];
    }
}
