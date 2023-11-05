<?php

use App\Http\Controllers\AdminController;
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

Route::controller(AdminController::class)->prefix('panel')->middleware('admin')->group(function(){
    Route::get('/', 'dashboard');
    Route::get('/profile', 'profile');

    // USER
    Route::get('/user', 'user');
    Route::post('/user/setPassive', 'set_passive');
    Route::post('/user/setActive', 'set_active');
    Route::post('/user/remove', 'remove');
    Route::get('/user/detail/{id}', 'detail');
    Route::post('/user/setPassword', 'set_password');
    Route::get('/user/new', 'new');
    Route::post('user/create', 'create');
    Route::get('/user/edit/{id}', 'edit');
    Route::post('/user/update', 'update');

    // CATEGORY
    Route::get('/category', 'category');
    Route::post('/category/create', 'create_category');
    Route::post('/category/update', 'update_category');

    // PLACES
    Route::get('/place', 'place');

    // PAYMENT
    Route::get('/payment', 'payment');

    // CONTACT
    Route::get('/contact', 'contact');

    // SETTINGS
    Route::get('/settings', 'settings');

    // API
    Route::get('/api', 'api');
});