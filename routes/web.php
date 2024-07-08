<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DetailController;


Route::get('/', [WelcomeController::class, 'index']);
Route::get('/detail/{id}', [DetailController::class, 'show'])->name('detail');


//Route Tentang
Route::get('/about', function () {
    return view('about');
});

// Route contact
Route::get('/contact', function () {
    return view('contact');
});

// Route cart
Route::get('/cart', function () {
    return view('cart');
});

//Route Checkout
Route::get('/checkout', function () {
    return view('checkout');
});

// Route untuk Profil Pengguna
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
});

Auth::routes();

// Route untuk Home setelah Login
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::resource('kategori', KategoriController::class);
Route::resource('product', ProductController::class);


// Route Admin (Backend)
Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    // Route untuk dashboard admin
    Route::get('/dashboard', function () {
        return view('include.backend.dashboard');
    })->name('admin.dashboard');

    // Route Backend Lainnya
    Route::resource('kategori', KategoriController::class);
    Route::resource('product', ProductController::class);
    Route::resource('pesanan', PesananController::class);
    Route::resource('user', UserController::class);
});
