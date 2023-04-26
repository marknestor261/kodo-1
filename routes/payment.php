<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentPlanController;


Route::controller(DashboardController::class)->group(['prefix' => 'payment-plans', 'as' => 'payment-plans.'], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}', 'show')->name('show');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{id}', 'destroy')->name('destroy');
});
