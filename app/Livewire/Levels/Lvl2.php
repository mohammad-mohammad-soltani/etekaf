<?php

namespace App\Livewire\Levels;


use App\Services\OtpSaver;
use App\Services\SMS;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Lvl2 extends Component
{
    #[Validate('required|regex:/^9\d{9}$/' , message:["required" => "ورود شماره تلفن الزامی است" , "regex" => 'شماره تلفن باید معتبر و بدون 0 و +98 ابتدا باشد'])]
    public $phone;
    public function render()
    {
        return view('livewire.levels.lvl2');
    }
    public function next_step(){
        $this -> validate();
        if(OtpSaver::exist($this->phone)){
            $this->dispatch('level_up');
        }else{
            $otp = '123456';
//         SMS::SendOTP($this -> phone , $otp);
            OtpSaver::save($this -> phone , $otp);
            session()->put('phone', $this -> phone);
            $this -> dispatch('level_up');
        }

    }
}
