<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admins extends Authenticatable
{

    protected $table = 'admins';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'username', 'password' , 'created_at', 'updated_at'];
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}
