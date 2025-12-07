<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


Route::get('/form', \App\Livewire\HomePage::class);
Route::get('/' , function () {
   return view('welcom');
});

Route::get('/private-file/{path}', function ($path) {
    $disk = Storage::disk('local');

    if (! $disk->exists($path)) {
        abort(404);
    }

    return response($disk->get($path))
        ->header('Content-Type', $disk->mimeType($path));
})->where('path', '.*');
