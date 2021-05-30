<?php

use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ClientController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\FAQController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\NewsController;
use App\Http\Controllers\Web\PortfolioController;
use App\Http\Controllers\Web\ServiceController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['role:admin'])->name('dashboard');
    // Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['role:content_manager'])->name('dashboard');
});

require __DIR__.'/auth.php';
