<?php

namespace App\Livewire\Admins\Component;

use Livewire\Component;

class Row extends Component
{
    public $user;
    public function mount($user)
    {
        $this -> user = $user;
    }
    public function render()
    {
        return view('livewire.admins.component.row');
    }
}
