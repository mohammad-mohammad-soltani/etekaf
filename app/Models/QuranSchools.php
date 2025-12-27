<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuranSchools extends Model
{
    protected $table = 'quran_schools';
    protected $fillable = ['name' , 'slug' , 'max_capacity' , 'now_capacity' , 'created_at' , 'updated_at'];
}
