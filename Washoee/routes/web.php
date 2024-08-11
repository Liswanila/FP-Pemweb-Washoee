<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\DatabaseTestController;

// Routes for main pages
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/tracking', [TrackingController::class, 'index'])->name('tracking');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/tracking/search', [TrackingController::class, 'search'])->name('tracking.search');
Route::get('/payment', [PaymentController::class, 'show'])->name('payment.show');
Route::post('/payment', [PaymentController::class, 'process'])->name('payment.process');
Route::get('/check-database-connection', [ExampleController::class, 'checkDatabaseConnection']);
Route::get('/dbtest', [DatabaseTestController::class, 'index']);

// Routes for dropdown pages under "Pages"
Route::prefix('pages')->group(function () {
    Route::get('/pricing', [PagesController::class, 'pricing'])->name('pages.pricing');
    Route::get('/team', [PagesController::class, 'team'])->name('pages.team');
    Route::get('/faqs', [PagesController::class, 'faqs'])->name('pages.faqs');
});
