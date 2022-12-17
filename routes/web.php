<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],
function() {
    Route::get('/', [MainController::class, 'index'])->name('home');   
      
    Route::group(['prefix' => 'panel'], function () {
        Voyager::routes();
    });
});
Route::post('/order', [OrderController::class, 'order'])->name('order'); 

