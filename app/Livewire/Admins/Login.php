<?php

namespace App\Livewire\Admins;

use App\Http\Controllers\Payment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $username;
    public $password;
    public function mount(){
        if(Auth::check()) {
            return redirect()->route('dashboard' );
        }
    }
    public function render()
    {
        return view('livewire.admins.login');
    }
    public function login(){
        if( Auth::attempt(['username' => $this->username, 'password' => $this->password] , true)){
            return redirect()->route('dashboard');
        }

    }
}
