<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('landing');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index'])->name('gallery');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

require __DIR__ . '/auth.php';

// grouping route admin with middleware auth
Route::group(['as' => 'admin.', 'prefix' => '/admin', 'middleware' => 'auth'], function () {
    // dashboard
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    Route::group(['as' => 'cms.', 'prefix' => '/cms'], function () {

        // home slider
        Route::group(['as' => 'slider.', 'prefix' => '/slider'], function () {
            Route::get('/', [App\Http\Controllers\Admin\SliderController::class, 'index'])->name('index');
            Route::get('/create', [App\Http\Controllers\Admin\SliderController::class, 'create'])->name('create');
            Route::post('/store', [App\Http\Controllers\Admin\SliderController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\SliderController::class, 'edit'])->name('edit');
            Route::patch('/update/{id}', [App\Http\Controllers\Admin\SliderController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [App\Http\Controllers\Admin\SliderController::class, 'destroy'])->name('destroy');
        });

        // home page
        Route::group(['as' => 'home.', 'prefix' => '/home'], function () {
            Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('index');
            Route::post('/store', [App\Http\Controllers\Admin\HomeController::class, 'store'])->name('store');
            Route::get('/edit', [App\Http\Controllers\Admin\HomeController::class, 'edit'])->name('edit');
            Route::post('/update', [App\Http\Controllers\Admin\HomeController::class, 'update'])->name('update');
        });

        // about page
        Route::group(['as' => 'about.', 'prefix' => '/about'], function () {
            Route::get('/', [App\Http\Controllers\Admin\AboutController::class, 'index'])->name('index');
            Route::post('/store', [App\Http\Controllers\Admin\AboutController::class, 'store'])->name('store');
            Route::get('/edit', [App\Http\Controllers\Admin\AboutController::class, 'edit'])->name('edit');
            Route::post('/update', [App\Http\Controllers\Admin\AboutController::class, 'update'])->name('update');
        });

        // team page
        Route::group(['as' => 'team.', 'prefix' => '/team'], function () {
            Route::get('/', [App\Http\Controllers\Admin\TeamController::class, 'index'])->name('index');
            Route::post('/store', [App\Http\Controllers\Admin\TeamController::class, 'store'])->name('store');
            Route::patch('/update/{id}', [App\Http\Controllers\Admin\TeamController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [App\Http\Controllers\Admin\TeamController::class, 'destroy'])->name('destroy');
        });

        // bullet point page
        Route::group(['as' => 'bullet.', 'prefix' => '/bullet'], function () {
            Route::post('/store', [App\Http\Controllers\Admin\BulletPointController::class, 'store'])->name('store');
            Route::patch('/update/{id}', [App\Http\Controllers\Admin\BulletPointController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [App\Http\Controllers\Admin\BulletPointController::class, 'destroy'])->name('destroy');
        });

        // testimoni page
        Route::group(['as' => 'testimoni.', 'prefix' => '/testimoni'], function () {
            Route::get('/', [App\Http\Controllers\Admin\TestimoniController::class, 'index'])->name('index');
            Route::post('/store', [App\Http\Controllers\Admin\TestimoniController::class, 'store'])->name('store');
            Route::patch('/update/{id}', [App\Http\Controllers\Admin\TestimoniController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [App\Http\Controllers\Admin\TestimoniController::class, 'destroy'])->name('destroy');
        });

        // contact page
        Route::group(['as' => 'contact.', 'prefix' => '/contact'], function () {
            Route::get('/', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('index');
            Route::post('/store', [App\Http\Controllers\Admin\ContactController::class, 'store'])->name('store');
            Route::get('/edit', [App\Http\Controllers\Admin\ContactController::class, 'edit'])->name('edit');
            Route::post('/update', [App\Http\Controllers\Admin\ContactController::class, 'update'])->name('update');
        });
    });
});
