<?php

namespace App\Livewire\Levels;

use Livewire\Component;

class Lvl7 extends Component
{
    public $referralSource ;
    public $quranState = false;
    public $activityArea;
    public function render()
    {
        return view('livewire.levels.lvl7');
    }
    public function next_step(){
        $this -> dispatch('level_up' , ['referral_source' => $this -> referralSource , 'quran_state' => $this -> quranState , 'activity_area' => $this -> activityArea ]);
    }
}
