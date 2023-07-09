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

    // Contact Inbox
    Route::group(['as' => 'inbox.', 'prefix' => '/inbox'], function () {
        Route::get('/', [App\Http\Controllers\Admin\InboxController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\InboxController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\InboxController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\InboxController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\InboxController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [App\Http\Controllers\Admin\InboxController::class, 'destroy'])->name('delete');
    });

    // home slider
    Route::group(['as' => 'gallery.', 'prefix' => '/gallery'], function () {
        Route::get('/', [App\Http\Controllers\Admin\GalleryController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\GalleryController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\GalleryController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\GalleryController::class, 'edit'])->name('edit');
        Route::patch('/update/{id}', [App\Http\Controllers\Admin\GalleryController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [App\Http\Controllers\Admin\GalleryController::class, 'destroy'])->name('destroy');
    });

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

    Route::group(['as' => 'global.', 'prefix' => '/global'], function () {
        // Header
        Route::group(['as' => 'header.', 'prefix' => '/header'], function () {
            Route::get('/', [App\Http\Controllers\Admin\HeaderController::class, 'index'])->name('index');
            Route::post('/store', [App\Http\Controllers\Admin\HeaderController::class, 'store'])->name('store');
            Route::get('/edit', [App\Http\Controllers\Admin\HeaderController::class, 'edit'])->name('edit');
            Route::post('/update', [App\Http\Controllers\Admin\HeaderController::class, 'update'])->name('update');
        });

        // Footer
        Route::group(['as' => 'footer.', 'prefix' => '/footer'], function () {
            Route::get('/', [App\Http\Controllers\Admin\FooterController::class, 'index'])->name('index');
            Route::post('/store', [App\Http\Controllers\Admin\FooterController::class, 'store'])->name('store');
            Route::get('/edit', [App\Http\Controllers\Admin\FooterController::class, 'edit'])->name('edit');
            Route::post('/update', [App\Http\Controllers\Admin\FooterController::class, 'update'])->name('update');
        });

        // contact_widget
        Route::group(['as' => 'contact_widget.', 'prefix' => '/contact_widget'], function () {
            Route::get('/', [App\Http\Controllers\Admin\ContactWidgetController::class, 'index'])->name('index');
            Route::post('/store', [App\Http\Controllers\Admin\ContactWidgetController::class, 'store'])->name('store');
            Route::get('/edit', [App\Http\Controllers\Admin\ContactWidgetController::class, 'edit'])->name('edit');
            Route::post('/update', [App\Http\Controllers\Admin\ContactWidgetController::class, 'update'])->name('update');
        });

        // contact_info
        Route::group(['as' => 'contact_info.', 'prefix' => '/contact_info'], function () {
            Route::get('/', [App\Http\Controllers\Admin\ContactInfoController::class, 'index'])->name('index');
            Route::post('/store', [App\Http\Controllers\Admin\ContactInfoController::class, 'store'])->name('store');
            Route::get('/edit', [App\Http\Controllers\Admin\ContactInfoController::class, 'edit'])->name('edit');
            Route::post('/update', [App\Http\Controllers\Admin\ContactInfoController::class, 'update'])->name('update');
        });

        // Social Media Page
        Route::group(['as' => 'social_media.', 'prefix' => '/social_media'], function () {
            Route::get('/', [App\Http\Controllers\Admin\SocialMediaController::class, 'index'])->name('index');
            Route::get('/create', [App\Http\Controllers\Admin\SocialMediaController::class, 'create'])->name('create');
            Route::post('/store', [App\Http\Controllers\Admin\SocialMediaController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\SocialMediaController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [App\Http\Controllers\Admin\SocialMediaController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [App\Http\Controllers\Admin\SocialMediaController::class, 'delete'])->name('delete');
        });
    });

    // static page
    Route::group(['as' => 'staticpage.', 'prefix' => 'staticpage'], function () {
        Route::post('/{section}/store', [App\Http\Controllers\StaticPageController::class, 'save'])->name('save');
    });
});
