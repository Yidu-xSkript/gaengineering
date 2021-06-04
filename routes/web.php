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
use App\Http\Controllers\Web\SkillController;
use App\Http\Controllers\Web\SubscriptionController;
use App\Http\Controllers\Web\TeamController;
use App\Http\Controllers\Web\TestimonialController;
use App\Http\Controllers\Web\VideoController;
use App\Http\Controllers\Web\WCUController;
use App\Http\Controllers\Web\WorkProcessController;
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
Route::get('/service/{id}', [ServiceController::class, 'detail']);
Route::group(['prefix' => 'portfolio'], function() {
    Route::get('/', [PortfolioController::class, 'index']);
    Route::get('/{id}', [PortfolioController::class, 'detail']);
});
Route::group(['prefix' => 'news'], function() {
    Route::get('/', [NewsController::class, 'index']);
    Route::get('/{id}', [NewsController::class, 'detail']);
    Route::get('/search/find', [NewsController::class, 'search']);
});
Route::group(['prefix' => 'contact'], function() {
    Route::get('/', [ContactController::class, 'index']);
    Route::post('/', [ContactController::class, 'sendContactMessage']);
});
Route::post('/subscribe', [SubscriptionController::class, 'store']);
Route::get('/unsubscribe/{id}', [SubscriptionController::class, 'destroyIndex']);
Route::delete('/unsubscribe/{id}', [SubscriptionController::class, 'removeSubscriber']);

Route::group(['middleware' => 'auth', 'prefix' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['prefix' => 'custom-header', 'middleware' => 'role:admin'], function() {
        Route::get('/', [HomeController::class, 'adminIndex']);
        Route::patch('/', [HomeController::class, 'update']);
    });

    Route::group(['prefix' => 'custom-about', 'middleware' => 'role:admin'], function() {
        Route::get('/', [AboutController::class, 'adminIndex']);
        Route::patch('/', [AboutController::class, 'update']);
    });

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

    Route::group(['prefix' => 'service', 'middleware' => 'role:admin'], function() {
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

    Route::group(['prefix' => 'partners', 'middleware' => 'role:admin'], function() {
        Route::get('/', [PartnerController::class, 'index']);
        Route::post('/', [PartnerController::class, 'store']);
        Route::patch('/{id}/edit', [PartnerController::class, 'update']);
        Route::delete('/{id}/destroy', [PartnerController::class, 'destroy']);
    });

    Route::group(['prefix' => 'clients', 'middleware' => 'role:admin'], function() {
        Route::get('/', [ClientController::class, 'adminIndex']);
        Route::post('/', [ClientController::class, 'store']);
        Route::patch('/{id}/edit', [ClientController::class, 'update']);
        Route::delete('/{id}/destroy', [ClientController::class, 'destroy']);
    });

    Route::group(['prefix' => 'manager', 'middleware' => 'role:admin'], function() {
        Route::get('/', [UserController::class, 'index'])->name('user.admin.index');
        Route::post('/', [UserController::class, 'addManager'])->name('user.admin.store');
        Route::patch('/{id}/edit', [UserController::class, 'updateManager'])->name('user.admin.update');
        Route::delete('/{id}/destroy', [UserController::class, 'destroy'])->name('user.admin.destroy');
    });

    Route::group(['prefix' => 'newsletter'], function() {
        Route::get('/', [NewsletterController::class, 'index'])->name('newsletter.admin.index');
        Route::post('/', [NewsletterController::class, 'store'])->name('newsletter.admin.store');
        Route::patch('/{id}/edit', [NewsletterController::class, 'update']);
        Route::patch('/{id}/send', [NewsletterController::class, 'sendMail']);
        Route::delete('/{id}/destroy', [NewsletterController::class, 'destroy']);
    });

    Route::group(['prefix' => 'subscription'], function() {
        Route::get('/', [SubscriptionController::class, 'index'])->name('subscriber.admin.index');
        Route::post('/', [SubscriptionController::class, 'store'])->name('subscriber.admin.store');
        Route::delete('/{id}/remove', [SubscriptionController::class, 'removeSubscriber']);
    });

    Route::group(['prefix' => 'portfolio', 'middleware' => 'role:admin'], function() {
        Route::get('/', [PortfolioController::class, 'adminIndex'])->name('portfolio.admin.index');
        Route::get('/create', [PortfolioController::class, 'adminCreate'])->name('portfolio.admin.create');
        Route::post('/', [PortfolioController::class, 'store'])->name('portfolio.admin.store');
        Route::patch('/{id}/edit', [PortfolioController::class, 'update'])->name('portfolio.admin.edit');
        Route::delete('/{id}/destroy', [PortfolioController::class, 'destroy'])->name('portfolio.admin.destroy');

        Route::group(['prefix' => 'image'], function() {
            Route::patch('/{portfolio_id}/edit', [PortfolioController::class, 'm_updatePortfolioImage']);
            Route::get('/{id}/destroy{portfolio_id}', [PortfolioController::class, 'm_destroyPortfolioImage'])->name('portfolio.image.destroy');
            Route::delete('/{portfolio_id}/destroy/all', [PortfolioController::class, 'm_destroyAllPortfolioImage']);
        });

        Route::group(['prefix' => 'category'], function() {
            Route::get('/', [PortfolioController::class, 'm_indexPortfolioCategory']);
            Route::post('/', [PortfolioController::class, 'm_createPortfolioCategory']);
            Route::patch('/{id}/edit', [PortfolioController::class, 'm_updatePortfolioCategory']);
            Route::delete('/{id}/destroy', [PortfolioController::class, 'm_destroyPortfolioCategory']);
        });
    });

    Route::group(['prefix' => 'video'], function() {
        Route::get('/', [VideoController::class, 'adminIndex']);
        Route::post('/', [VideoController::class, 'store']);
        Route::patch('/{id}/edit', [VideoController::class, 'update']);
        Route::delete('/{id}/destroy', [VideoController::class, 'destroy']);
    });

    Route::group(['prefix' => 'settings', 'middleware' => 'role:admin'], function() {
        Route::get('/', [SettingController::class, 'index']);
        Route::patch('/', [SettingController::class, 'update']);
    });

    Route::group(['prefix' => 'account'], function() {
        Route::get('/', [UserController::class, 'setup']);
        Route::patch('/', [UserController::class, 'update']);
    });

    Route::group(['prefix' => 'contact'], function() {
        Route::get('/', [ContactController::class, 'adminIndex']);
        Route::delete('/{id}/destroy', [ContactController::class, 'removeContactInfo']);
    });

    Route::group(['prefix' => 'skills'], function() {
        Route::get('/', [SkillController::class, 'index']);
        Route::post('/', [SkillController::class, 'store']);
        Route::patch('/{id}/edit', [SkillController::class, 'update']);
        Route::delete('/{id}/destroy', [SkillController::class, 'destroy']);
    });

    Route::group(['prefix' => 'why-choose-us'], function() {
        Route::get('/', [WCUController::class, 'adminIndex']);
        Route::post('/', [WCUController::class, 'store']);
        Route::patch('/{id}/edit', [WCUController::class, 'update']);
        Route::delete('/{id}/destroy', [WCUController::class, 'destroy']);
    });

    Route::group(['prefix' => 'work-process'], function() {
        Route::get('/', [WorkProcessController::class, 'index']);
        Route::post('/', [WorkProcessController::class, 'store']);
        Route::patch('/{id}/edit', [WorkProcessController::class, 'update']);
        Route::delete('/{id}/destroy', [WorkProcessController::class, 'destroy']);
    });

    Route::group(['prefix' => 'faqs'], function() {
        Route::get('/', [FAQController::class, 'adminIndex']);
        Route::post('/', [FAQController::class, 'store']);
        Route::patch('/{id}/edit', [FAQController::class, 'update']);
        Route::delete('/{id}/destroy', [FAQController::class, 'destroy']);
    });
});
// 'throttle:6,1'
require __DIR__.'/auth.php';
