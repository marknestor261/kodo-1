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
    // jobs middleware
    // these two is_paid middleware
    Route::get('scholarships/{program_id}', 'scholarship')->name('user.scholarship');
    Route::get('apply-scholarship/{program_id}', 'applyProgram')->name('user.apply');
    Route::get('jobs/{job_id}', 'scholarship')->name('user.job');
    Route::get('apply-job/{job_id}', 'applyProgram')->name('user.apply.job');
    // ========================
    Route::get('ban-scholarship/{program_id}', 'banProgram')->name('user.ban');
    Route::get('save-scholarship/{program_id}', 'saveProgram')->name('user.save');
    Route::get('unsave-scholarship/{program_id}', 'unsaveProgram')->name('user.unsave');
    Route::get('unban-scholarship/{program_id}', 'unbanProgram')->name('user.unban');

    // PAYMENTS
    Route::get('payment', function () { return view('dashboard.user.user_payment'); })->name('payment');
    Route::post('/pay-with-flutterwave', 'PaymentController@payWithFlutterwave')->name('flutterwave.pay');

});

Route::middleware(['auth', 'is_job'])->controller(DashboardController::class)->prefix('jobs')->group(function() {
    Route::get('dashboard', 'indexJobs')->name('dashboard.jobs');
    Route::get('saved', 'savedJobs')->name('saved.jobs');
    Route::get('banned', 'bannedJobs')->name('banned.jobs');
    Route::get('applied', 'appliedJobs')->name('applied.jobs');
    Route::get('matched', 'matchedJobs')->name('matched.jobs');
    Route::post('search', 'searchJobs')->name('user.search.jobs');
    
    Route::get('ban-job/{program_id}', 'banJob')->name('user.ban.job');
    Route::get('save-job/{program_id}', 'saveJob')->name('user.save.job');
    Route::get('unsave-job/{program_id}', 'unsaveJob')->name('user.unsave.job');
    Route::get('unban-job/{program_id}', 'unbanJob')->name('user.unban.job');
});
