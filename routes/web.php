<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


Route::get('/', \App\Livewire\HomePage::class) -> name('form');
Route::get('/quran/{quran_school_name}', \App\Livewire\HomePage::class) -> name('quran_form');
//Route::get('/' , function () {
//   return view('welcom');
//});
Route::middleware('auth:web')->group(function () {
    Route::prefix('monitor')->group(function () {
        Route::get('/' , \App\Livewire\Admins\Dashboard::class) -> name('admin.dashboard'); ;
    });
});
Route::get('monitor/login' , \App\Livewire\Admins\Login::class) -> name('login');

Route::get('/private-file/{path}', function ($path) {
    $disk = Storage::disk('local');

    if (! $disk->exists($path)) {
        abort(404);
    }

    return response($disk->get($path))
        ->header('Content-Type', $disk->mimeType($path));
})->where('path', '.*');

Route::get('/verify' , [\App\Http\Controllers\Payment::class , 'check']) -> name('payment.callback');
