<?php

namespace App\Livewire\Levels;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Lvl5 extends Component
{
    #[Validate('required|regex:/^09\d{9}$/', message:["mobile_number.required" => "شماره همراه الزامی است", "mobile_number.regex" => "لطفا شماره تلفن را با فرمت09xxxxxxxxx وارد کنید"])]
    public $mobile_number;

    #[Validate('required|in:isfahan,outher', message:["province.required" => "انتخاب استان الزامی است", "province.in" => "استان نامعتبر است"])]
    public $province = 'isfahan';

    #[Validate('required|regex:/^09\d{9}$/', message:["parent_mobile.required" => "شماره همراه والدین الزامی است", "parent_mobile.regex" => "لطفا شماره تلفن را با فرمت09xxxxxxxxx وارد کنید"])]
    public $parent_mobile;

    #[Validate('required|string|max:150', message:["school_name.required" => "نام مدرسه الزامی است", "school_name.max" => "نام مدرسه نباید بیشتر از 150 کاراکتر باشد"])]
    public $school_name;

    public function render()
    {
        return view('livewire.levels.lvl5');
    }

    public function next_step()
    {
        $this->validate();
        $this->dispatch('level_up' , ['phone_number' => $this -> mobile_number , 'parent_number' => $this -> parent_mobile , 'province' => $this -> province , 'school_name' => $this -> school_name]);
    }


}
