<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route Admin(Backend)
Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function() {
    Route::get('/', function(){
        return view('admin.index');
    });
});

// untuk route Admin(Backend) Lainnya
Route::resource('user', App\Http\Controllers\UserController::class);
