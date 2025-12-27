<?php

namespace App\Livewire;

use App\Models\EtekafUsers;
use App\Models\QuranSchools;
use App\Services\Pay;
use Livewire\Attributes\On;
use Livewire\Attributes\Session;
use Livewire\Component;

class HomePage extends Component
{
    public $current_level = 1;
    #[Session('from_payment')]
    public $from_payment = false;
    #[Session('end_of_form')]
    public $end_of_form;
    public $max_tab = 8;
    public $min_level = 1;

    #[Session('name')]
    public $name;
    #[Session('user_data')]
    public $user_data = [
        'name' => null,
        'gender' => null,
        'birthyear' => null,
        'national_code' => null,
        'phone_number' => null,
        'parent_number' => null,
        'province' => null,
        'school' => null,
        'location_selected' => null,
        'referral_source' => null,
        'quran_state' => null,
        'activity_area' => null,
    ];
    #[Session('quran_school')]
    public $quran_school = false;
    #[Session('quran_school_slug')]

    public $quran_school_slug = false;

    public function mount($quran_school_name = null)
    {
        if (!is_null($quran_school_name)) {
            $this -> quran_school_slug = $quran_school_name;
            $school = QuranSchools::where('slug', $quran_school_name);
            if($school -> exists()){
                $school = $school->first();
                if($school -> now_capacity < $school->max_capacity){
                    $this -> quran_school = $school -> school_name;
                    $this -> user_data['location_selected'] = 'nasrallah';
                }else{
                    return abort(409 );
                }
            }
        }
        $status = request()->has('completed');
        $fail = request()->has('payment_fail');

        if ($this->current_level == 1 && !$status && !$this -> end_of_form ) {
            session()->forget('user_data');

            if($this -> quran_school){
                $this->user_data = [
                    'name' => null,
                    'gender' => null,
                    'birthyear' => null,
                    'national_code' => null,
                    'phone_number' => null,
                    'parent_number' => null,
                    'province' => null,
                    'school' => null,
                    'location_selected' => 'nasrallah',
                    'referral_source' => null,
                    'quran_state' => null,
                    'activity_area' => null,
                ];
            }else{
                $this->user_data = [
                    'name' => null,
                    'gender' => null,
                    'birthyear' => null,
                    'national_code' => null,
                    'phone_number' => null,
                    'parent_number' => null,
                    'province' => null,
                    'school' => null,
                    'location_selected' => null,
                    'referral_source' => null,
                    'quran_state' => null,
                    'activity_area' => null,
                ];
            }

        }elseif ($status){
            $this -> current_level = 9;
            $this -> end_of_form  = true;
        } else if ($this->end_of_form) {
            $this->current_level = 9;
        }

        if($fail){
            $this -> end_of_form = false;
            $this->current_level = 10;
        }
    }

    public function render()
    {
        return view('livewire.home-page');
    }

    #[On('level_up')]
    public function level_up($data = [])
    {
        foreach ($data as $key => $value) {
            $this->user_data[$key] = $value;
        }
        if ($this->current_level == 1) {
            $this->current_level = 4;
        }else if($this -> current_level == 5 && $this->quran_school){
            $this -> current_level = 7;
        }else{
            $this->current_level = $this->current_level + 1;
        }

        if ($this->current_level == 4) {
            $this->user_phone = session()->get('phone');
        }


    }

    #[On('reform')]
    public function reform()
    {
        session()->forget('user_data');
        $this->reset('from_payment');
        $this->reset('user_data');
        $this->user_data = [
            'name' => null,
            'gender' => null,
            'birthyear' => null,
            'national_code' => null,
            'phone_number' => null,
            'parent_number' => null,
            'province' => null,
            'school' => null,
            'location_selected' => null,
            'referral_source' => null,
            'quran_state' => null,
            'activity_area' => null,
        ];
        $this->current_level = 4;
        $this->end_of_form = false;
        if($this -> quran_school){
            session()->forget('quran_school');
            $this -> reset('quran_school');
            $slug = $this -> quran_school_slug;
            session()->forget('quran_school_slug');
            $this -> reset('quran_school_slug');
            return redirect() -> route('quran_form' , $slug  );
        }else{
            return redirect() -> route('form' );
        }
    }

    #[On('make_user')]
    public function make_user()
    {
        if ($this->user_data['quran_state']) {
            $amount = 3000000;
        } else {
            $amount = 3500000;
        }
        $payment_id = Pay::start_payment($amount);
        if ($payment_id) {
            if($this -> quran_school){
                $quran_school = $this -> quran_school_slug;
            }else{
                $quran_school = null;
            }
            EtekafUsers::create([
                'name' => $this->user_data['name'],
                'birth_year' => $this->user_data['birth_date'],
                'national_code' => $this->user_data['national_code'],
                'phone_number' => $this->user_data['phone_number'],
                'parent_phone_number' => $this->user_data['parent_number'],
                'province' => $this->user_data['province'],
                'school' => $this->user_data['school_name'],
                'location' => $this->user_data['location_selected'],
                'industry' => $this->user_data['referral_source'],
                'job' => $this->user_data['activity_area'],
                'quran' => $this->user_data['quran_state'] ? 1 : 0,
                'payment_status' => 'pending',
                'track_id' => $payment_id,
                'quran_school' => $quran_school
            ]);
            return redirect('https://gateway.zibal.ir/start/' . $payment_id);
        }
    }
}
