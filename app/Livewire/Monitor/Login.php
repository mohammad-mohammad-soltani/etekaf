<?php

namespace App\Livewire\Monitor;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.monitor')]
class Login extends Component
{
    public $password = '';
    public $passwordError = '';

    public function authenticate()
    {
        if ($this->password === 'webfullstackdev') {
            session(['monitor_authenticated' => true]);
            return $this->redirect(route('monitor.dashboard-livewire'), navigate: true);
        }

        $this->passwordError = 'رمز عبور نادرست است.';
        $this->password = '';
    }

    public function render()
    {
        return view('livewire.monitor.login');
    }
}
