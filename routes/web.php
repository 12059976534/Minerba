<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionControllers;
use App\Http\Controllers\RoleControllers;
use App\Http\Controllers\UsersControllers;
use App\Http\Controllers\NewsControllers;
use App\Http\Controllers\KategoriControllers;
use App\Http\Controllers\web\DashboardController;
use App\Http\Controllers\web\HomeControllers;
use App\Http\Controllers\web\NewsController;
use App\Http\Controllers\web\NewsDetailController;
use App\Http\Controllers\web\ProfileController;

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


Auth::routes();

Route::get('/', [HomeControllers::class, 'index'])->name('home-web');
Route::get('/news/{kategori}', [NewsController::class, 'index'])->name('news-web');
Route::get('/conten/{slug:slug}', [NewsController::class, 'detail'])->name('conten');
Route::get('/comodity', [App\Http\Controllers\MiningComodiyControllers::class, 'index'])->name('comodity');
Route::get('/contruktor', [App\Http\Controllers\MiningConstruktorControllers::class, 'index'])->name('contruktor');
Route::get('/karir', [App\Http\Controllers\CarrierControllers::class, 'index'])->name('karir');
Route::get('/tender', [App\Http\Controllers\TenderCotrollers::class, 'index'])->name('tender');
Route::get('/prospek', [App\Http\Controllers\ProspekController::class, 'index'])->name('prospek'); 
Route::get('/regulasi', [App\Http\Controllers\RegulationsController::class, 'index'])->name('regulasi');
Route::group(['middleware' => ['auth']], function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('profile', ProfileController::class)->only(['index', 'edit']);
});

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function() {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('roles', RoleControllers::class);
    Route::resource('users', UsersControllers::class);
    Route::resource('permission', PermissionControllers::class);
    Route::resource('news', NewsControllers::class);
    Route::resource('kategori', KategoriControllers::class);
});
