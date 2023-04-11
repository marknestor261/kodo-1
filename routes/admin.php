<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function() {
    // 
    Route::get('dashboard', function () { return view('admin.dashboard.dashboard');
     })->name('admin.dashboard');
     Route::get('about-edit', function () { return view('admin.dashboard.pages.about-edit');})->name('admin.about-edit');
     Route::get('home-edit', function () { return view('admin.dashboard.pages.home-edit');})->name('admin.home-edit');
     Route::get('testimonials-edit', function () { return view('admin.dashboard.pages.testimonials-edit');})->name('admin.testimonials-edit');
     Route::get('scholarships-edit', function () { return view('admin.dashboard.pages.scholarships-edit');})->name('admin.scholarships-edit');
    Route::controller(AdminController::class)->group(function() {
        Route::get('create-scholarship', 'createScholarship')->name('admin.create-scholarship');
        Route::post('create-scholarship', 'storeScholarship')->name('admin.create.scholarship');
        Route::get('all-scholarships', 'allScholarships')->name('admin.all-scholarships');
        Route::get('published-scholarships', 'publishedScholarships')->name('admin.published-scholarships');
        Route::get('unpublished-scholarships', 'unpublishedScholarships')->name('admin.unpublished-scholarships');
        Route::get('publish-scholarship/{program_id}', 'publish')->name('admin.publish');
        Route::get('unpublish-scholarship/{program_id}', 'unpublish')->name('admin.unpublish');
        Route::get('edit-scholarship/{program_id}', 'editScholarship')->name('admin.edit-scholarship');
        Route::post('edit-scholarship/{program_id}', 'updateScholarship')->name('admin.edit.scholarship');

    });
});

