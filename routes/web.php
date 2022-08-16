<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\CompareResultController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactResultController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/compare', [CompareController::class, 'create'])
    ->name('compare');

Route::put('/compareresult', [CompareResultController::class, 'index'])
    ->name('compareresult');

Route::get('/subscribe', [SubscribeController::class, 'create'])
    ->name('subscribe');

Route::get('/faq', [FaqController::class, 'index'])
    ->name('faq');

Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact');

Route::put('/contactresult', [ContactResultController::class, 'store'])
    ->name('contactresult');

Route::get('/contactresult', [ContactResultController::class, 'index'])
    ->name('contactresult.index');

require __DIR__.'/auth.php';
