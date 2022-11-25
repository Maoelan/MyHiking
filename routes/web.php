<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\infoController;
use App\Http\Controllers\pegunungan_bukitController;
use App\Http\Controllers\storyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\userController;
use App\Http\Controllers\pegununganController;
use App\Http\Controllers\info_setController;
use App\Http\Controllers\story_setController;
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
//Route::get('/story', [storyController::class, 'index'])->name('story');
Route::get('/info', [infoController::class, 'index'])->name('info');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//user story

Route::get('/story', [story_setController::class, 'indexUser'])->name('story');
Route::get('/story', [story_setController::class, 'lihatStoryUser'])->name('story');

Route::get('/story_insert', [story_setController::class, 'insertStoryUser'])->name('story_insert');
Route::post('/story_insert_action', [story_setController::class, 'storeUser'])->name('story_insert_action');



Route::get('/logout', function () {
    \Auth::logout();
    return redirect('/home');
});


//Admin Route
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    //user

    Route::get('/home_admin', [HomeController::class, 'admin_home'])->name('admin.home');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    Route::get('/user_setting', [userController::class, 'index'])->name('user_setting');
    Route::get('/user_setting', [userController::class, 'lihatUser'])->name('user_setting');

    Route::get('/user_setting_edit/{id}', [userController::class, 'lihatUserEdit'])->name('user_setting_edit');
    Route::post('/user_setting_edit_action/{id}', [userController::class, 'updateUser'])->name('user_setting_edit_action');

    Route::get('/user_setting_delete/{id}', [userController::class, 'destroy'])->name('user_setting_delete');

    //Route::resource('pegunungan', PegununganController::class); pegunungan

    Route::get('/pegunungan_setting', [pegununganController::class, 'index'])->name('pegunungan_setting');
    Route::get('/pegunungan_setting', [pegununganController::class, 'lihatPegunungan'])->name('pegunungan_setting');

    Route::get('/pegunungan_setting_insert', [pegununganController::class, 'insertPegunungan'])->name('pegunungan_setting_insert');
    Route::post('/pegunungan_setting_insert_action', [pegununganController::class, 'store'])->name('pegunungan_setting_insert_action');

    Route::get('/pegunungan_setting_edit/{id_gunung}', [pegununganController::class, 'edit'])->name('pegunungan_setting_edit');
    Route::post('/pegunungan_setting_edit_action/{id_gunung}', [pegununganController::class, 'update'])->name('pegunungan_setting_edit_action');

    Route::get('/pegunungan_setting_delete/{id_gunung}', [pegununganController::class, 'destroy'])->name('pegunungan_setting_delete');

    //info
    
    Route::get('/info_setting', [info_setController::class, 'index'])->name('info_setting');
    Route::get('/info_setting', [info_setController::class, 'lihatInfo'])->name('info_setting');

    Route::get('/info_setting_insert', [info_setController::class, 'insertInfo'])->name('info_setting_insert');
    Route::post('/info_setting_insert_action', [info_setController::class, 'store'])->name('info_setting_insert_action');

    Route::get('/info_setting_edit/{id_info}', [info_setController::class, 'edit'])->name('info_setting_edit');
    Route::post('/info_setting_edit_action/{id_info}', [info_setController::class, 'update'])->name('info_setting_edit_action');

    Route::get('/info_setting_delete/{id_info}', [info_setController::class, 'destroy'])->name('info_setting_delete');

    //story

    Route::get('/story_setting', [story_setController::class, 'index'])->name('story_setting');
    Route::get('/story_setting', [story_setController::class, 'lihatStory'])->name('story_setting');

    Route::get('/story_setting_insert', [story_setController::class, 'insertStory'])->name('story_setting_insert');
    Route::post('/story_setting_insert_action', [story_setController::class, 'store'])->name('story_setting_insert_action');

    Route::get('/story_setting_edit/{id_story}', [story_setController::class, 'edit'])->name('story_setting_edit');
    Route::post('/story_setting_edit_action/{id_story}', [story_setController::class, 'update'])->name('story_setting_edit_action');

    Route::get('/story_setting_delete/{id_story}', [story_setController::class, 'destroy'])->name('story_setting_delete');
});
