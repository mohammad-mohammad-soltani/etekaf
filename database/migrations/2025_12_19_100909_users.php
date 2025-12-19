<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('etekaf_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table -> string('birth_year');
            $table -> string('national_code') -> unique();
            $table -> string('phone_number');
            $table -> string('parent_phone_number');
            $table -> enum('province' , ['isfahan' , 'other'] );
            $table -> string('school');
            $table -> enum('location' , ['nasrallah' , 'soleimani' , 'muhandis' , 'kuntar' , 'yamen' , 'sinwar' , 'deif' , 'mughniyeh' , 'safieddine' , 'haniyeh']);
            $table -> string('industry');
            $table -> string('job') -> nullable();
            $table -> boolean('quran');
            $table -> enum('payment_status' , ['pending' , 'approved']);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
