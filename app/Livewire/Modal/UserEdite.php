<?php

namespace App\Livewire\Modal;

use App\Models\EtekafUsers;
use Livewire\Attributes\Validate;
use Livewire\Component;

class UserEdite extends Component
{
    public $user;
    public $birth_year;
    #[Validate('required|in:haniyeh,safieddine,mughniyeh,deif,sinwar,yamen,kuntar,muhandis,soleimani,nasrallah' , message: ['location.required' => 'وارد کردن محل استقرار الزامی است' , 'location.in' => 'محور وارد شده نامعتبر است'])]
    public $location;
    public $job;
    public $payment_status;

    public function mount($user)
    {
        $this->user = $user;
        $this->job = $user -> job;
        $this->birth_year = $user -> birth_year;
        $this->location = $user -> location;
        $this->payment_status = $user -> payment_status;
    }
    public function render()
    {
        return view('livewire.modal.user-edite');
    }
    public function save_changes(){
        $this -> user -> update([
            'birth_year' => $this->birth_year,
            'location' => $this->location,
            'job' => $this->job,
            'payment_status' => $this->payment_status
        ]);
    }
    public function close(){
        $this -> dispatch('closeModal');
    }
    public function delete(){
        $this -> user -> delete();
        $this -> dispatch('closeModal');
    }
}
