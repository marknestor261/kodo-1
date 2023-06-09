<?php

use Illuminate\Support\Facades\Route;

// FRONTEND ==================================================
// Route::get('/', function () {
//     return view('home.frontend.index');
// })->name('frontend.index');
Route::get('/',[\App\Http\Controllers\FrontEndPagesController::class,'homePage'])->name('frontend.index');
// Route::get('about', function () {
//     return view('home.frontend.about');
// })->name('frontend.about');
Route::get('about',[\App\Http\Controllers\FrontEndPagesController::class,'aboutPage'])->name('frontend.about');


// Route::get('testimonials', function () {
//     return view('home.frontend.testimonials');
// })->name('frontend.testimonials');
Route::get('testimonials',[\App\Http\Controllers\FrontEndPagesController::class,'testimonialsPage'])->name('frontend.testimonials');


// Route::get('scholarships', function () {
//     return view('home.frontend.scholarships');
// })->name('frontend.scholarships');
Route::get('scholarships',[\App\Http\Controllers\FrontEndPagesController::class,'scholarshipPage'])->name('frontend.scholarships');

// ===========================================================


Route::get('faq',[\App\Http\Controllers\FrontEndPagesController::class,'faqPage'])->name('frontend.faq');

Route::get('testimonial',[\App\Http\Controllers\FrontEndPagesController::class,'testimonialPage'])->name('frontend.testimonial');

Route::get('contact',[\App\Http\Controllers\FrontEndPagesController::class,'contactPage'])->name('frontend.contact');

Route::get('blog',[\App\Http\Controllers\FrontEndPagesController::class,'blogPage'])->name('frontend.blog');

Route::get('landing', [\App\Http\Controllers\FrontEndPagesController::class, 'landingPage'])->name('frontend.landing');

Route::get('forgot', [\App\Http\Controllers\FrontEndPagesController::class, 'forgotPage'])->name('frontend.forgot');

//testing payment
Route::get('payform', [\App\Http\Controllers\FrontEndPagesController::class, 'payformPage'])->name('frontend.payform');
Route::post('payfluter', [\App\Http\Controllers\FrontEndPagesController::class, 'payFluter'])->name('frontend.payfluter');
Route::get('paymentstatus', [\App\Http\Controllers\FrontEndPagesController::class, 'paymentStatus'])->name('frontend.paymentstatus');