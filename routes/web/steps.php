<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StepController;


Route::get('/search-programs', function () {
    return view('home.steps.index');
})->name('search');

Route::controller(StepController::class)->group(function() {
    Route::get('discover', 'saveGoals');
    Route::get('app/experience', 'saveGoals');
    Route::post('steps/names', 'saveAddress')->name('steps.04');
    Route::post('steps/auth', 'saveNames')->name('steps.05');
    Route::post('users/create', 'createUser')->name('steps.create'); 
});

Route::get('steps/when-to-join', function () {
    return view('home.steps.step_two');
})->name('steps.02');

Route::get('steps/address', function () {
    return view('home.steps.step_three');
})->name('steps.03');


Route::get('steps/auth', function () {
    return view('home.steps.step_five');
});

