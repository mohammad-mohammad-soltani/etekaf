<?php

namespace App\Livewire;

use Livewire\Component;

class VerifyPortal extends Component
{
    public $national_code;
    public function render()
    {
        return view('livewire.verify-portal');
    }
    public function verify(){
        return redirect()->route('verify' , $this->national_code);
    }
}
