<?php

use App\Http\Controllers\RuangController;
use Illuminate\Support\Facades\Route;

// Define the Dashboard route
Route::get('/', function () {
    return view('welcome', ["title" => "Dashboard"]);
})->name('dashboard');

// Define the Sample route
Route::get('/sample', function () {
    return view('sample', ["title" => "Sample"]);
})->name('sample');

// Group routes with 'guest' middleware
Route::middleware(['guest'])->group(function () {
    Route::resource('Ruang', RuangController::class);
});
