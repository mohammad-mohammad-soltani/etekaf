<?php

namespace App\Livewire\Levels;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Lvl7 extends Component
{
    #[Validate('in:banner,friends,bus,social' , message:['referralSource.in' => 'لطفا طریقه آشنایی خود را وارد کنید'])]
    public $referralSource = 'banner';
    public $quranState = false;
    public $activityArea;
    public function render()
    {
        return view('livewire.levels.lvl7');
    }
    public function next_step(){
        $this -> validate();
        $this -> dispatch('level_up' , ['referral_source' => $this -> referralSource , 'quran_state' => $this -> quranState , 'activity_area' => $this -> activityArea ]);
        $this -> dispatch('make_user');
    }
}
