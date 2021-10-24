<?php

use App\Http\Controllers\{ApiController,AdminController,AdminAuthController};
use Facade\FlareClient\Api;
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
    return view('index');
});

//Api Controller

Route::get('get/apis',[ApiController::class,'getApiData']);
Route::get('clean/database',[ApiController::class,'cleanDatabase']);

//AdminCotroller

Route::get ('/login',[AdminAuthController::class, 'index']);
Route::post('admin/login',[AdminAuthController::class, 'check_login']);
Route::get('/dashboard',[AdminController::class,'view_dashboard']);
Route::get('/userlist',[AdminController::class,'viewUserList']);
Route::get('user/details/{id}',[AdminController::class,'user_details']);

Route::get('/postslist',[AdminController::class,'posts_list']);








