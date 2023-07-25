<?php

use App\Http\Controllers\admin\AboutSliderController;
use App\Http\Controllers\admin\ContactSliderController;
use App\Http\Controllers\admin\HomeSliderController;
use App\Http\Controllers\admin\ServiceSliderController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'),'verified'])
->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/setting', [SettingController::class,'index'])->name('setting.index'); //
    Route::patch('/setting', [SettingController::class,'update'])->name('setting.update'); //


    Route::resource('home-slider', HomeSliderController::class);
    Route::resource('about-slider', AboutSliderController::class);
    Route::resource('service-slider', ServiceSliderController::class);
    Route::resource('contact-slider', ContactSliderController::class);
    Route::get('/inactive/{id}', [HomeSliderController::class, 'InactiveSlider'])->name('inactive.slider');
    Route::get('/active{id}', [HomeSliderController::class, 'ActiveSlider'])->name('active.slider');

    Route::get('fontawsome', function() {
        return view('admin.icons.fontawsome');
    })->name('fontawsome');

    Route::get('themify', function() {
        return view('admin.icons.themify');
    })->name('themify');



});


Route::get('/', [WebsiteController::class, 'home'])->name('home');


