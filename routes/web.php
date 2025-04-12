<?php

use App\Http\Controllers\BlogControlller;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomerServiceControlller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServicesController;
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

// Landing page
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/lang/change', [Controller::class, 'language'])->name('changeLang');
Route::get('/theme/change', [Controller::class, 'theme'])->name('changeTheme');

Route::get('/contact-us', [ContactUsController::class, 'index']);
Route::post('/contact-us', [ContactUsController::class, 'send'])->name('contact.send');

Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/service-details', [ServicesController::class, 'details'])->name('service.details');

Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/product-details', [ProductsController::class, 'details'])->name('product.details');


Route::get('/customer-service', [CustomerServiceControlller::class, 'index'])->name('customer.service');

Route::get('/blog', [BlogControlller::class, 'index'])->name('blog.all');
Route::get('/blog-details', [BlogControlller::class, 'details'])->name('blog.details');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
