<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    // Metode untuk menampilkan halaman checkout
    public function show()
    {
        return view('checkout');
    }

    public function checkout()
    {
        // Ambil semua keranjang belanja pengguna yang belum di-checkout
        $keranjangs = Keranjang::where('id_user', Auth::id())
            ->get();
    
        // Hitung subtotal dari produk yang ada di keranjang
        $subtotal = $keranjangs->sum(function ($keranjang) {
            return $keranjang->product->harga;
        });
    
        // Biaya transaksi (opsional)
        $biaya_transaksi = 0; // Biaya tambahan bisa dihitung sesuai kebijakan bisnis Anda
    
        // Total yang harus dibayar (subtotal + biaya transaksi)
        $total = $subtotal + $biaya_transaksi;
    
        // Kirimkan data ke view 'checkout'
        return view('checkout', compact('keranjangs', 'subtotal', 'biaya_transaksi', 'total'));
    }
    



    public function placeOrder(Request $request)
    {
        // Ambil semua keranjang belanja pengguna yang belum di-checkout
        $keranjangs = Keranjang::where('id_user', Auth::id())
            ->get();

        // Validasi jika keranjang belanja kosong
        if ($keranjangs->isEmpty()) {
            return redirect()->route('keranjang.index')->with('error', 'Keranjang belanja Anda kosong.');
        }

        // Buat transaksi baru
        $transaksi = new Transaksi();
        $transaksi->id_user = Auth::id();
        $transaksi->total_harga = $keranjangs->sum(function ($keranjang) {
            return $keranjang->product->harga;
        });
        $transaksi->save();

        // Update status keranjang menjadi sudah checkout
        foreach ($keranjangs as $keranjang) {
            $keranjang->status = 'sudah_checkout';
            $keranjang->save();
        }

        // Redirect ke halaman sukses transaksi atau halaman lain yang sesuai
        return redirect()->route('transaksi.sukses')->with('success', 'Transaksi berhasil dilakukan.');
    }
}
