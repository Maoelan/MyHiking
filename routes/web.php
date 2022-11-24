<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\infoController;
use App\Http\Controllers\pegunungan_bukitController;
use App\Http\Controllers\storyController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/pegunungan_bukit', [pegunungan_bukitController::class, 'index'])->name('pegunungan_bukit');
Route::get('/story', [storyController::class, 'index'])->name('story');
Route::get('/info', [infoController::class, 'index'])->name('info');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', function () {
    \Auth::logout();
    return redirect('/home');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/home_admin', [HomeController::class, 'admin_home'])->name('admin.home');
});
