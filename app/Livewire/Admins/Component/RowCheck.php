<?php

namespace App\Livewire\Admins\Component;

use Livewire\Component;

class RowCheck extends Component
{
    public $user;
    public function mount($user)
    {
        $this -> user = $user;
    }
    public function render()
    {
        return view('livewire.admins.component.row-check');
    }
    public function user_logged_in(){
        $this -> user -> update([
            'logged_in' => true
        ]);
    }
    public function open_user(){
        $this -> dispatch('openModal' , $this -> user->id);
    }
}
