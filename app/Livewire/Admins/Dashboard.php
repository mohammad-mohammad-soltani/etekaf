<?php

namespace App\Livewire\Admins;

use App\Models\EtekafUsers;
use Livewire\Attributes\On;
use Livewire\Component;

class Dashboard extends Component
{
    public $countEtekafUsers;
    public $countPendingEtekafUsers;
    public $countQuranEtekafUsers;
    public $countWorkerEtekafUsers;
    public $search_text;
    public $search_result = [];
    public bool $IsShowUserModal = false;
    public $CurrentUser = null;
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
    public function doSearch()
    {
        $value = trim($this->search_text);

        if (strlen($value) < 2) {
            $this->search_result = [];
            return;
        }

        $this->search_result = EtekafUsers::where(function ($q) use ($value) {
            $q->where('name', 'like', "%{$value}%")
                ->orWhere('national_code', 'like', "%{$value}%")
                ->orWhere('phone_number', 'like', "%{$value}%")
                ->orWhere('parent_phone_number', 'like', "%{$value}%")
                ->orWhere('school', 'like', "%{$value}%");
        })
            ->limit(20)
            ->get();
    }

    #[On('openModal')]
    public function open_modal($id){
        $this ->  CurrentUser = EtekafUsers::find($id);
        $this -> IsShowUserModal = true;
    }
    #[On('closeModal')]
public function close_modal(){
        $this -> IsShowUserModal = false;
        $this -> currentUser = null;
    }
}
