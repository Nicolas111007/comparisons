<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\CompareResultController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactResultController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SupplierModController;
use App\Http\Controllers\ContractModController;
use App\Http\Controllers\PriceModController;
use App\Http\Controllers\ImageUploadController;

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

Route::get('/admin', [AdminController::class, 'index'])
    ->name('admin');

Route::resource('suppliermod', SupplierModController::class);

Route::get('/suppliermod', [SupplierModController::class, 'index'])
    ->name('suppliermod');

Route::get('/suppliermod/create', [SupplierModController::class, 'create'])
    ->name('suppliermod.create');

Route::resource('contractmod', ContractModController::class);

Route::get('/contractmod', [ContractModController::class, 'index'])
    ->name('contractmod');

Route::get('/contractmod/create', [ContractModController::class, 'create'])
    ->name('contractmod.create');

Route::resource('pricemod', PriceModController::class);

Route::get('/pricemod', [PriceModController::class, 'index'])
    ->name('pricemod');

Route::get('/pricemod/create', [PriceModController::class, 'create'])
    ->name('pricemod.create');

//For adding an image
Route::get('/add-image',[ImageUploadController::class,'addImage'])->name('images.add');

//For storing an image
Route::post('/store-image',[ImageUploadController::class,'storeImage'])->name('images.store');

//For showing an image
Route::get('/view-image',[ImageUploadController::class,'viewImage'])->name('images.view');

require __DIR__.'/auth.php';
