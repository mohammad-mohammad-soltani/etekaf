<?php

namespace Database\Seeders;

use App\Models\Admins;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminGenerator extends Seeder
{
    public function run(): void
    {
        Admins::create([
            'name' => 'محمد محمد سلطانی',
            'username' => 'mohammad',
            'password' => Hash::make('webfullstackdev')
        ]);

        Admins::create([
            'name' => 'حمید حجتی',
            'username' => 'hamid',
            'password' => Hash::make('goftemanrazm.ir_password_xyz_2025')
        ]);
    }
}
