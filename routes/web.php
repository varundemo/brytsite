<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHome;
use App\Http\Controllers\Web\ServicesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class, 'index']);

Route::get('/blog',[BlogController::class,'index'])->name('blog');
Route::get('/services/pte',[ServicesController::class,'pte'])->name('service.pte');
Route::get('/services/migration',[ServicesController::class,'migration'])->name('service.migration');
Route::get('/service',[ServicesController::class,'service'])->name('service');

Route::get('/home/header',[AdminHome::class,'header'])->name('home.header');
Route::get('/home/choose',[AdminHome::class,'choose'])->name('home.choose');
Route::post('header-section-send',[AdminHome::class,'headersectionsend'])->name('header-section-send');

Route::get('/contact',[ContactController::class,'index']);
Route::get('/blog/blog-name',[BlogController::class,'singleblog']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard',[DashboardController::class,'show'])->middleware(['auth'])->name('dashboard');;

require __DIR__.'/auth.php';
