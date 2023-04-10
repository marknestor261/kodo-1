<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::middleware('auth')->controller(DashboardController::class)->group(function() {
    Route::get('dashboard', 'index')->name('dashboard');
    Route::get('saved', 'saved')->name('saved');
    Route::get('banned', 'banned')->name('banned');
    Route::get('applied', 'applied')->name('applied');
    Route::get('matched', 'matched')->name('matched');
    Route::get('profile', 'profile')->name('user.profile');
    Route::post('search', 'search')->name('user.search.scholarship');
    // these two is_paid middleware
    Route::get('scholarships/{program_id}', 'scholarship')->name('user.scholarship');
    Route::get('apply-scholarship/{program_id}', 'applyProgram')->name('user.apply');
    // ========================
    Route::get('ban-scholarship/{program_id}', 'banProgram')->name('user.ban');
    Route::get('save-scholarship/{program_id}', 'saveProgram')->name('user.save');
    Route::get('unsave-scholarship/{program_id}', 'unsaveProgram')->name('user.unsave');
    Route::get('unban-scholarship/{program_id}', 'unbanProgram')->name('user.unban');
    Route::get('payment', function () { return view('dashboard.user.user_payment'); })->name('payment');
});
