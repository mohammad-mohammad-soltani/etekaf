<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuranSchools extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\QuranSchools::create([
            'school_name' => 'مدرسه قرآنی رضوی',
            'max_capacity' => 23,
            'now_capacity' => 0,
            'slug' => 'razavi_school'
        ]);
        \App\Models\QuranSchools::create([
            'school_name' => 'حوزه علمیه طباطبایی نژاد',
            'max_capacity' => 10,
            'now_capacity' => 0,
            'slug' => 'tabatabaei_school'
        ]);
        \App\Models\QuranSchools::create([
            'school_name' => 'ثامن الائمه',
            'max_capacity' => 40,
            'now_capacity' => 0,
            'slug' => 'samen_alaeme_school'
        ]);
        \App\Models\QuranSchools::create([
            'school_name' => 'سبحات',
            'max_capacity' => 15,
            'now_capacity' => 0,
            'slug' => 'sobahat_school'
        ]);
    }
}
