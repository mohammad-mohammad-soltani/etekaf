<?php

namespace App\Livewire\Admins;

use App\Models\EtekafUsers;
use Livewire\Component;

class Dashboard extends Component
{
    public $countEtekafUsers;
    public $countPendingEtekafUsers;
    public $countQuranEtekafUsers;
    public $countWorkerEtekafUsers;
    public $search_text;
    public $search_result = [];
    public function mount(){
        $this -> countEtekafUsers = EtekafUsers::where('payment_status' , 'approved') -> count();
        $this -> countPendingEtekafUsers = EtekafUsers::where('payment_status' , 'pending') -> count();
        $this -> countQuranEtekafUsers = EtekafUsers::where('quran' , '1') -> count();
        $this->countWorkerEtekafUsers = EtekafUsers::whereNotNull('job')->count();
    }
    public function render()
    {
        return view('livewire.admins.dashboard');
    }
    public function updatedSearchText($value)
    {
        $this->search_result = EtekafUsers::where('name', 'like', "%{$value}%")
        -> orwhere('national_code', 'like', "%{$value}%")
        -> orwhere('phone_number', 'like', "%{$value}%")
        -> orwhere('parent_phone_number', 'like', "%{$value}%")
        -> orwhere('school', 'like', "%{$value}%")
            ->get();
    }

}
