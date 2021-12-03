<?php

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

Route::get('/', function () {
    return view('web.page.home.index');
})->name('home-web');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/news', [App\Http\Controllers\NewsControllers::class, 'index'])->name('news');
Route::get('/comodity', [App\Http\Controllers\MiningComodiyControllers::class, 'index'])->name('comodity');
Route::get('/contruktor', [App\Http\Controllers\MiningConstruktorControllers::class, 'index'])->name('contruktor');
Route::get('/karir', [App\Http\Controllers\CarrierControllers::class, 'index'])->name('karir');
Route::get('/tender', [App\Http\Controllers\TenderCotrollers::class, 'index'])->name('tender');
Route::get('/prospek', [App\Http\Controllers\ProspekController::class, 'index'])->name('prospek'); 
Route::get('/regulasi', [App\Http\Controllers\RegulationsController::class, 'index'])->name('regulasi');
  