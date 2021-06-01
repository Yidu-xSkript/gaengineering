<?php

use App\Http\Controllers\Web\EmailController;
use App\Http\Controllers\Web\UserController;
use App\Http\Controllers\Web\PartnerController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ClientController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\FAQController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\NewsController;
use App\Http\Controllers\Web\NewsletterController;
use App\Http\Controllers\Web\PortfolioController;
use App\Http\Controllers\Web\ServiceController;
use App\Http\Controllers\Web\SettingController;
use App\Http\Controllers\Web\SubscriptionController;
use App\Http\Controllers\Web\TeamController;
use App\Http\Controllers\Web\TestimonialController;
use App\Http\Controllers\Web\VideoController;
use App\Http\Controllers\Web\WCUController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/team', [TeamController::class, 'index']);
Route::get('/why-choose-us', [WCUController::class, 'index']);
Route::get('/clients', [ClientController::class, 'index']);
Route::get('/testimonials', [TestimonialController::class, 'index']);
Route::get('/FAQs', [FAQController::class, 'index']);
Route::get('/videos', [VideoController::class, 'index']);
Route::get('/services', [ServiceController::class, 'index']);
Route::get('/service/detail', [ServiceController::class, 'detail']);
Route::get('/portfolio', [PortfolioController::class, 'index']);
Route::get('/portfolio/detail', [PortfolioController::class, 'detail']);
Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/detail', [NewsController::class, 'detail']);
Route::get('/contact', [ContactController::class, 'index']);

Route::group(['middleware' => 'auth', 'prefix' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/custom-header', [HomeController::class, 'adminIndex'])->name('custom.header')->middleware(['role:admin']);

    Route::group(['prefix' => 'news'], function() {
        Route::get('/', [NewsController::class, 'adminIndex'])->name('news.admin.index');
        Route::get('/create', [NewsController::class, 'adminCreate'])->name('news.admin.create');
        Route::post('/', [NewsController::class, 'store'])->name('news.admin.store');
        Route::patch('/{id}/edit', [NewsController::class, 'update'])->name('news.admin.edit');
        Route::delete('/{id}/destroy', [NewsController::class, 'destroy'])->name('news.admin.destroy');
    });

    Route::group(['prefix' => 'testimony'], function() {
        Route::get('/', [TestimonialController::class, 'adminIndex'])->name('testimony.admin.index');
        Route::post('/', [TestimonialController::class, 'store'])->name('testimony.admin.store');
        Route::patch('/{id}/edit', [TestimonialController::class, 'update'])->name('testimony.admin.edit');
        Route::delete('/{id}/destroy', [TestimonialController::class, 'destroy'])->name('testimony.admin.destroy');
    });

    Route::group(['prefix' => 'service'], function() {
        Route::get('/', [ServiceController::class, 'adminIndex'])->name('service.admin.index');
        Route::get('/create', [ServiceController::class, 'adminCreate'])->name('service.admin.create');
        Route::post('/', [ServiceController::class, 'store'])->name('service.admin.store');
        Route::patch('/{id}/edit', [ServiceController::class, 'update'])->name('service.admin.edit');
        Route::delete('/{id}/destroy', [ServiceController::class, 'destroy'])->name('service.admin.destroy');
    });

    Route::group(['prefix' => 'team'], function() {
        Route::get('/', [TeamController::class, 'adminIndex']);
        Route::post('/', [TeamController::class, 'store']);
        Route::patch('/{id}/edit', [TeamController::class, 'update']);
        Route::delete('/{id}/destroy', [TeamController::class, 'destroy']);
    });

    Route::get('/failed-emails', [EmailController::class, 'index'])->name('failed-email.admin.index');
    Route::get('/partners', [PartnerController::class, 'index'])->name('partner.admin.index');
    Route::get('/clients', [ClientController::class, 'adminIndex'])->name('client.admin.index');

    Route::group(['prefix' => 'manager', 'middleware' => 'role:admin'], function() {
        Route::get('/', [UserController::class, 'index'])->name('user.admin.index');
        Route::post('/', [UserController::class, 'addManager'])->name('user.admin.store');
        Route::patch('/{id}/edit', [UserController::class, 'updateManager'])->name('user.admin.update');
        Route::delete('/{id}/destroy', [UserController::class, 'destroy'])->name('user.admin.destroy');
    });

    Route::group(['prefix' => 'newsletter'], function() {
        Route::get('/', [NewsletterController::class, 'index'])->name('newsletter.admin.index');
        Route::post('/', [NewsletterController::class, 'store'])->name('newsletter.admin.store');
        Route::patch('/{id}/edit', [NewsletterController::class, 'update'])->name('newsletter.admin.update');
        Route::delete('/{id}/destroy', [NewsletterController::class, 'destroy'])->name('newsletter.admin.destroy');
    });

    Route::group(['prefix' => 'subscription'], function() {
        Route::get('/', [SubscriptionController::class, 'index'])->name('subscriber.admin.index');
        Route::post('/', [SubscriptionController::class, 'store'])->name('subscriber.admin.store');
    });

    Route::group(['prefix' => 'portfolio'], function() {
        Route::get('/', [PortfolioController::class, 'adminIndex'])->name('portfolio.admin.index');
        Route::get('/create', [PortfolioController::class, 'adminCreate'])->name('portfolio.admin.create');
        Route::post('/', [PortfolioController::class, 'store'])->name('portfolio.admin.store');
        Route::patch('/{id}/edit', [PortfolioController::class, 'update'])->name('portfolio.admin.edit');
        Route::delete('/{id}/destroy', [PortfolioController::class, 'destroy'])->name('portfolio.admin.destroy');

        Route::group(['prefix' => 'category'], function() {
            Route::get('/', [PortfolioController::class, 'm_indexPortfolioCategory']);
            Route::post('/', [PortfolioController::class, 'm_createPortfolioCategory']);
            Route::patch('/{id}/edit', [PortfolioController::class, 'm_updatePortfolioCategory']);
            Route::delete('/{id}/destroy', [PortfolioController::class, 'm_destroyPortfolioCategory']);
        });
    });

    Route::get('/video', [VideoController::class, 'adminIndex'])->name('video.admin.index');

    Route::group(['prefix' => 'settings', 'middleware' => 'role:admin'], function() {
        Route::get('/', [SettingController::class, 'index']);
        Route::patch('/', [SettingController::class, 'update']);
    });

    Route::group(['prefix' => 'account'], function() {
        Route::get('/', [UserController::class, 'setup']);
        Route::patch('/', [UserController::class, 'update']);
    });
    Route::get('/contact', [ContactController::class, 'adminIndex']);
});
// 'throttle:6,1'
require __DIR__.'/auth.php';
