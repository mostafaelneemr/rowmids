<?php

use App\Http\Controllers\admin\AboutSliderController;
use App\Http\Controllers\admin\ArchitectureController;
use App\Http\Controllers\admin\ArchitecturePictureController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\CareerController;
use App\Http\Controllers\admin\CareerSliderController;
use App\Http\Controllers\admin\ClientSliderController;
use App\Http\Controllers\admin\ContactSliderController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\HomeSliderController;
use App\Http\Controllers\admin\PortfolioSliderController;
use App\Http\Controllers\admin\ServiceDecorationController;
use App\Http\Controllers\admin\ServiceSliderController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\WebsiteController;
use App\Models\admin\ArchitecturePicture;
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

    Route::group(['prefix' => '/home'], function() {
        Route::resource('home-slider', HomeSliderController::class);
    });

    Route::group(['prefix' => 'about'], function() {
        Route::resource('about-slider', AboutSliderController::class);

        Route::resource('/testimonials', TestimonialController::class);
        Route::get('/testimonial/inactive/{id}', [TestimonialController::class, 'inActiveTestimonial'])->name('inactive.testimonial');
        Route::get('/testimonial/active{id}', [TestimonialController::class, 'ActiveTestimonial'])->name('active.testimonial');

        Route::resource('/teams', TeamController::class);
        Route::get('/teams/inactive/{id}', [TeamController::class, 'InactiveTeam'])->name('inactive.team');
        Route::get('/teams/active{id}', [TeamController::class, 'ActiveTeam'])->name('active.team');

    });

    Route::group(['prefix' => '/service'], function() {
        Route::resource('/service-slider', ServiceSliderController::class);
        Route::resource('/service-home', ServiceDecorationController::class);
        Route::resource('/architecture-picture', ArchitecturePictureController::class);
        Route::resource('/architecture', ArchitectureController::class);
    });

    Route::group(['prefix' => '/client'], function() {
        Route::resource('client-slider', ClientSliderController::class);
        Route::resource('/brands', BrandController::class);
        Route::get('brand/inactive/{id}', [BrandController::class, 'InactiveBrand'])->name('inactive.brand');
        Route::get('brand/active{id}', [BrandController::class, 'ActiveBrand'])->name('active.brand');
    });

    Route::group(['prefix' => '/portfolio'], function() {
        Route::resource('portfolio-slider', PortfolioSliderController::class);
        Route::resource('gallery', GalleryController::class);
        // Route::resource('/brands', BrandController::class);
        // Route::get('brand/inactive/{id}', [BrandController::class, 'InactiveBrand'])->name('inactive.brand');
        // Route::get('brand/active{id}', [BrandController::class, 'ActiveBrand'])->name('active.brand');
    });



    Route::group(['prefix' => '/career'], function() {
        Route::resource('career-slider', CareerSliderController::class);
        Route::resource('career-position', CareerController::class);
        Route::get('brand/inactive/{id}', [CareerController::class, 'InactiveCareer'])->name('inactive.career');
        Route::get('brand/active{id}', [CareerController::class, 'ActiveCareer'])->name('active.career');
        
    });

    Route::group(['prefix' => '/contact'], function() {
        Route::resource('contact-slider', ContactSliderController::class);
    });

    Route::get('/slider/inactive/{id}', [HomeSliderController::class, 'InactiveSlider'])->name('inactive.slider');
    Route::get('/slider/active{id}', [HomeSliderController::class, 'ActiveSlider'])->name('active.slider');

    
    Route::get('/setting', [SettingController::class,'index'])->name('setting.index');
    Route::patch('/setting', [SettingController::class,'update'])->name('setting.update');

    Route::get('fontawsome', function() {
        return view('admin.icons.fontawsome');
    })->name('fontawsome');

    Route::get('themify', function() {
        return view('admin.icons.themify');
    })->name('themify');

});


Route::get('pass', function () {
    return view('auth.forgot-password');
});


Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/service', [WebsiteController::class, 'service'])->name('service');
Route::get('/client', [WebsiteController::class, 'client'])->name('client');
Route::get('/portfolio', [WebsiteController::class, 'portfolio'])->name('portfolio');
Route::get('/career', [WebsiteController::class, 'career'])->name('career');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
