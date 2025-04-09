<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'aboutUs']);
Route::get('/lang/change', [Controller::class, 'language'])->name('changeLang');
Route::get('/theme/change', [Controller::class, 'theme'])->name('changeTheme');

Route::get('/contact-us', [ContactUsController::class, 'index']);
Route::post('/contact-us', [ContactUsController::class, 'send'])->name('contact.send');

Route::get('/services', [ServicesController::class, 'index']);
Route::get('/service-details', [ServicesController::class, 'details']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
