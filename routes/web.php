<?php

use App\Http\Controllers\BlogControlller;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomerServiceControlller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider, and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Landing page
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/send-quotation-request', [HomeController::class, 'quotation'])->name('contact.send-quotation-request');

Route::get('/lang/change', [Controller::class, 'language'])->name('change-language');
Route::get('/theme/change', [Controller::class, 'theme'])->name('change-theme');

Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact');
Route::post('/contact-us', [ContactUsController::class, 'send'])->name('contact.send');

Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/service/{slug}', [ServicesController::class, 'details'])->name('service.details');

Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/product/{slug}', [ProductsController::class, 'index'])->name('product.details');

Route::get('/customer-service', [CustomerServiceControlller::class, 'index'])->name('customer.service');
Route::post('/customer-service', [CustomerServiceControlller::class, 'send'])->name('customer.service.send');

Route::get('/blog', [BlogControlller::class, 'index'])->name('blog.all');
Route::get('/blog/{slug}/details', [BlogControlller::class, 'details'])->name('blog.details');

Route::get('/page/{slug}', [PageController::class, 'index'])->name('page.details');;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
