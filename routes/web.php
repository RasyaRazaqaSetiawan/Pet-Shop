<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\TransaksiController;

// Route Untuk Guest (Pengunjung)
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->middleware('adminRedirect')->name('welcome');
Route::get('/detail/{id}', [DetailController::class, 'show'])->name('detail');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop');

// Route untuk user yang sudah login
Route::middleware('auth')->group(function () {

    Route::get('/profile', [UserController::class, 'tampil'])->name('profile');
    Route::put('/profile/update', [UserController::class, 'update'])->name('profile.update');
    Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');
    Route::post('/keranjang/update-quantity', [KeranjangController::class, 'updateQuantity'])->name('keranjang.updateQuantity');
    Route::post('/keranjang/add', [KeranjangController::class, 'addToCart'])->name('keranjang.add');
    Route::delete('/keranjang/{keranjang}', [KeranjangController::class, 'destroy'])->name('keranjang.destroy');
    Route::post('/keranjang/clear', [KeranjangController::class, 'clearCart'])->name('keranjang.clear');
    Route::post('/transaksi/checkout', [TransaksiController::class, 'checkout'])->name('transaksi.checkout');
    Route::post('/transaksi/place-order', [TransaksiController::class, 'placeOrder'])->name('transaksi.placeOrder');

    Route::get('/checkout', [TransaksiController::class, 'checkout'])->name('transaksi.checkout');

});

Auth::routes();

// Route Admin (Backend)
Route::prefix('admin')->middleware(['auth', IsAdmin::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('include.backend.dashboard');
    })->name('admin.dashboard');

    // Route Backend Lainnya
    Route::resource('kategori', KategoriController::class);
    Route::resource('user', UserController::class);
    Route::resource('product', ProductController::class);
});
