<?php

namespace App\Livewire\Levels;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Lvl4 extends Component
{
    #[Validate('required|string|max:100', message:["full_name.required" => "نام و نام خانوادگی الزامی است", "full_name.max" => "نام نباید بیشتر از 100 کاراکتر باشد"])]
    public $full_name;

    #[Validate('required|integer|between:1388,1393', message:["birth_date.required" => "سال تولد الزامی است", "birth_date.between" => "با توجه به شرایط و قوانین اعتکاف ، تنها ثبت نام نوجوانان متولد شده از 88 تا 93 امکان پذیر است"])]
    public $birth_date;

    public $gender = 'male';

    #[Validate('required|digits:10|regex:/^[0-9]{10}$/', message:["national_code.required" => "کد ملی الزامی است", "national_code.digits" => "کد ملی باید 10 رقم باشد", "national_code.regex" => "کد ملی فقط باید شامل اعداد باشد"])]
    public $national_code;

    public function render()
    {
        return view('livewire.levels.lvl4');
    }

    public function next_step()
    {
        $this->validate();
        $this->dispatch('level_up' , ['name' => $this -> full_name  , 'birth_date' => $this -> birth_date , 'national_code' => $this -> national_code , 'gender' => $this -> gender]);
    }
}
