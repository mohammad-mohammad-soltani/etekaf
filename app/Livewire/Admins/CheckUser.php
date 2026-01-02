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
        $this->search_result = [];
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
        $this->search_text = '';

    }

}
//
//App\Models\EtekafUsers::create([
//    'national_code' => '6600332735',
//    'name'=> 'امیررضا نوربخش',
//    'birth_year' => '1393',
//    'school' => 'مدرسه لباف زاده',
//    'payment_status' => 'approved',
//    'phone_number' => '09372185676',
//    'parent_phone_number' => '09372185676',
//    'location' => 'sinwar',
//    'industry' => 'friends',
//    'quran' => 0,
//    'job' => null,
//    'track_id' => 4417186784
//]);
