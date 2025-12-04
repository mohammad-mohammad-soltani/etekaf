<?php

namespace App\Livewire\Levels;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Lvl4 extends Component
{
    #[Validate('required|string|max:100', message:["full_name.required" => "نام و نام خانوادگی الزامی است", "full_name.max" => "نام نباید بیشتر از 100 کاراکتر باشد"])]
    public $full_name;

    #[Validate('required|min:1388|max:1393', message:["birth_date.required" => "سال تولد الزامی است", "birth_date.max" => "ثبت نام نوجوانان متولد بالاتر از 93 ممکن نیست" , "birth_date.min" => "ثبت نام نوجوانان متولد کمتر از 88 ممکن نیست"])]
    public $birth_date;

    #[Validate('required|in:male', message:["gender.required" => "انتخاب جنسیت پسر الزامی است", "gender.in" => "این اعتکاف مخصوص پسران است و امکان ثبت نام دختران وجود ندارد"])]
    public $gender;

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
