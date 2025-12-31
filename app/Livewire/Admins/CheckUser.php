<?php

namespace App\Livewire\Admins;

use App\Models\EtekafUsers;
use Livewire\Component;

class CheckUser extends Component
{
    public $search_result = [];
    public $search_text;
    public function render()
    {
        return view('livewire.admins.check-user');
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
                ->orWhere('parent_phone_number', 'like', "%{$value}%");
        })
            ->limit(20)
            ->get();

    }

}
