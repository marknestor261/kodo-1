<?php

use Illuminate\Support\Facades\Route;


// FRONTEND ==================================================
// Route::get('/', function () {
//     return view('home.frontend.index');
// })->name('frontend.index');
Route::get('/',[\App\Http\Controllers\FrontEndPagesController::class,'homePage'])->name('frontend.index');
Route::get('about', function () {
    return view('home.frontend.about');
})->name('frontend.about');

Route::get('testimonials', function () {
    return view('home.frontend.testimonials');
})->name('frontend.testimonials');

Route::get('scholarships', function () {
    return view('home.frontend.scholarships');
})->name('frontend.scholarships');
// ===========================================================
