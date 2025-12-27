<?php

namespace App\Livewire\Levels;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Lvl4 extends Component
{
    #[Validate('required|string|max:100', message:["full_name.required" => "نام و نام خانوادگی الزامی است", "full_name.max" => "نام نباید بیشتر از 100 کاراکتر باشد"])]
    public $full_name;

    #[Validate('required|string|in:1388,1389,1390,1391,1392,1393', message:["birth_date.required" => "سال تولد الزامی است", "birth_date.between" => "با توجه به شرایط و قوانین اعتکاف ، تنها ثبت نام نوجوانان متولد شده از 88 تا 93 امکان پذیر است"])]
    public $birth_date ;

    public $gender = 'male';


    #[Validate([
        'required',
        'digits:10',
        'regex:/^[0-9]{10}$/',
        'unique:etekaf_users,national_code',
    ], message: [
        "national_code.required" => "کد ملی الزامی است",
        "national_code.digits" => "کد ملی باید ۱۰ رقم باشد",
        "national_code.regex" => "کد ملی فقط باید شامل اعداد باشد",
        "national_code.unique" => "این کدملی در سایت ثبت شده است.اگر هزینه را پرداخت نکرده اید 30 دقیقه دیگر به سایت مراجعه کنید و از ابتدا فرم را ارسال نمایید"
    ])]
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
