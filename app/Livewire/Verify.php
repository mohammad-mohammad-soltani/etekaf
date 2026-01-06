<?php

namespace App\Livewire;

use App\Models\EtekafUsers;
use Livewire\Component;

class Verify extends Component
{
    public $national_code;
    public function mount($national_code){
        $this->national_code = $national_code;
    }
    public function render()
    {
        $user = EtekafUsers::where('national_code', $this->national_code)->where('logged_in' , 1);
        if($user->exists()){
            $user = $user -> first();
            return view('livewire.verify' , compact('user'));
        }else{
            return abort(404);
        }
    }
}
