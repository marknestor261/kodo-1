<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


require __DIR__.'/web/auth.php';
require __DIR__.'/web/admin.php';
require __DIR__.'/web/user.php';
require __DIR__.'/web/frontend.php';
require __DIR__.'/web/steps.php';
require __DIR__.'/web/payment.php';

Route::get('test_mail', [\App\Http\Controllers\DashboardController::class,'testEmail']);


// For Clear cache
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

// 404 for undefined routes
Route::any('/{page?}',function(){
    return View::make('error-404');
})->where('page','.*');
