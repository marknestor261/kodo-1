<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function() {
    Route::get('users', function () { return view('admin.dashboard.users'); })->name('admin.users');
    Route::get('transactions/success', function () { return view('admin.dashboard.successtransactions'); })->name('admin.success.transactions');
    Route::get('transactions/failed', function () { return view('admin.dashboard.failedtransactions'); })->name('admin.failed.transactions');
    Route::controller(AdminController::class)->group(function() {
        // dashboard
        Route::get('dashboard', 'dashboard')->name('admin.dashboard');
        // scholarship routes
        Route::get('create-scholarship', 'createScholarship')->name('admin.create-scholarship');
        Route::post('create-scholarship', 'storeScholarship')->name('admin.create.scholarship');
        Route::get('all-scholarships', 'allScholarships')->name('admin.all-scholarships');
        Route::get('published-scholarships', 'publishedScholarships')->name('admin.published-scholarships');
        Route::get('unpublished-scholarships', 'unpublishedScholarships')->name('admin.unpublished-scholarships');
        Route::get('publish-scholarship/{program_id}', 'publish')->name('admin.publish');
        Route::get('unpublish-scholarship/{program_id}', 'unpublish')->name('admin.unpublish');
        Route::get('edit-scholarship/{program_id}', 'editScholarship')->name('admin.edit-scholarship');
        Route::post('edit-scholarship/{program_id}', 'updateScholarship')->name('admin.edit.scholarship');
        // edit pages routes
        Route::get('about-edit', 'aboutEdit')->name('admin.about-edit');
        Route::get('home-edit', 'homeEdit')->name('admin.home-edit');
        Route::get('testimonials-edit', 'testimonialsEdit')->name('admin.testimonials-edit');
        Route::get('scholarships-edit', 'scholarshipsEdit')->name('admin.scholarships-edit');

        // settings routes
        Route::get('settings', 'settingsGeneral')->name('admin.settings.general');
        Route::get('admin/settings/auth', 'settingsAuth')->name('admin.settings.auth');
        Route::get('admin/settings/mail', 'settingsMail')->name('admin.settings.mail');
        Route::get('admin/settings/payments', 'settingsPayment')->name('admin.settings.payments');

        // job routes
        Route::get('create-job', 'createJob')->name('admin.create-job');
        Route::post('create-job', 'storeJob')->name('admin.create.job');
        Route::get('all-jobs', 'allJobs')->name('admin.all-jobs');
        Route::get('published-jobs', 'publishedJobs')->name('admin.published-jobs');
        Route::get('unpublished-jobs', 'unpublishedJobs')->name('admin.unpublished-jobs');
        Route::get('publish-job/{job_id}', 'publishJob')->name('admin.publish.job');
        Route::get('unpublish-job/{job_id}', 'unpublishJob')->name('admin.unpublish.job');
        Route::get('edit-job/{job_id}', 'editJob')->name('admin.edit-job');
        Route::post('edit-job/{job_id}', 'updateJob')->name('admin.edit.job');

    });
});

