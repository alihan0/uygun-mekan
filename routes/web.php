<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
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

Route::controller(MainController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/categories', 'categories');
    Route::get('/category/{slug}/{sort?}', 'category');
    Route::get('/blog', 'blog');
    Route::get('/blog/detail/{id}', 'blog_detail');
    Route::get('/contact', 'contact');
    Route::get('/new-place', 'new_place')->middleware('auth');
    Route::get('/account', 'account')->middleware('auth');
    Route::post('/place/save', 'place_save');
    Route::post('/upload/cover', 'upload_cover');
});

Route::controller(AuthController::class)->prefix('auth')->group(function(){
    Route::get('/login', 'login')->name('login');
    Route::get('/register/company', 'register_company');
    Route::post('/save', 'save');
    Route::post('/save/company', 'save_company');
    Route::post('/logincontrol', 'login_control');
    Route::get('/logout', 'logout');
    Route::post('/edit/profile', 'edit_profile');
    Route::post('/edit/password', 'edit_password');
});
