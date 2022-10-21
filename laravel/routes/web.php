<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\ServicesController as AdminServicesController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PortfolioController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\CareersController;

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

// Route::get('/', function () {
//     return view('frontend.index');
// });


Route::group(['prefix' => 'admin'], function () {
    Route::get('', [AdminHomeController::class, "index"]);
    Route::get('/services', [AdminServicesController::class, "index"]);
});


Route::group(['prefix' => ''], function () {
    Route::get('/', [HomeController::class, "index"]);
    Route::get('/about-us', [AboutController::class, "index"]);
    Route::get('/services', [ServicesController::class, "index"]);
    Route::get('/services/{slug}', [ServicesController::class, "detail"]);
    Route::get('/portfolio', [PortfolioController::class, "index"]);
    Route::get('/portfolio/{slug}', [PortfolioController::class, "detail"]);
    Route::get('/contact', [ContactController::class, "index"]);
    Route::get('/careers', [CareersController::class, "index"]);
});
