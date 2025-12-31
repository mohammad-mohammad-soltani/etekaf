<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EtekafUsers extends Model
{
    protected $table = 'etekaf_users';
    protected $primaryKey = 'id';
    protected $fillable = ['name' , 'birth_year' , 'national_code' , 'phone_number' , 'parent_phone_number' , 'province' , 'school' , 'location' , 'industry' , 'job' , 'quran' , 'payment_status' , 'created_at' , 'updated_at' , 'track_id' , 'quran_school' , 'logged_in'];
}
