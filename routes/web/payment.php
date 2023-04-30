<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentPlanController;
use App\Http\Controllers\PaymentController;


Route::controller(PaymentPlanController::class)->prefix('payment-plans')->name('payment-plans.')->group( function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}', 'show')->name('show');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{id}', 'destroy')->name('destroy');
});



Route::controller(PaymentController::class)->group(function () {
    Route::get('verify/{txref}/payment/{plan_id}', 'handleFlutterwaveCallback');
    Route::post('paymomo', 'payWithMomo');
    Route::post('paycard', 'payWithCard');
    Route::get('choose/methods', 'chooseMethod');
    Route::get('pay_test/{phone}/figure/{amount}', 'payTest');
});

