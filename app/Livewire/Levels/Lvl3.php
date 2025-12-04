<?php

namespace App\Livewire\Levels;

use App\Services\OtpSaver;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Lvl3 extends Component
{
    #[Validate('required|digits:6', message:["required" => 'وارد کردن کد الزامی است', 'digits' => 'کد باید شامل 6 رقم باشد'])]
    public $code;

    public function render()
    {
        return view('livewire.levels.lvl3');

    }

    public function next_step()
    {
        $this->validate();
        $state =OTPSaver::verifyOtp(session()->get('phone'), $this->code);
        if($state === true){
            $this->dispatch('level_up');
        }else if($state == 'otp_expired'){
            $this->addError('code', 'کد تایید منقضی شده است . لطفا صفحه را بازنشانی کنید و دوباره درخواست دهید.');

        }else{
            $this->addError('code', 'کد وارد شده صحیح نمیباشد');
        }
    }
}
