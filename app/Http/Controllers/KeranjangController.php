<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function addToCart(Request $request)
    {
        if (Auth::guest()) {
            Alert::warning('Harap login terlebih dahulu untuk menambahkan ke keranjang', 'Maaf');
            return redirect()->back();
        } elseif (Auth::check()) {
            $id = $request->get('id_product');
            $jml = $request->get('jumlah');
            $keranjangItem = Keranjang::where('id_product', '=', $id)
                ->where('id_user', '=', Auth::user()->id)
                ->first();

            if ($keranjangItem) {
                $keranjangItem->jumlah += $jml;
                $keranjangItem->save();
                Alert::success('Jumlah produk di keranjang diperbarui', 'Berhasil')->autoclose(1500);
            } else {
                $keranjang = new Keranjang;
                $keranjang->id_user = Auth::user()->id;
                $keranjang->id_product = $id;
                $keranjang->jumlah = $jml;
                $keranjang->save();
                Alert::success('Produk berhasil ditambahkan ke keranjang', 'Berhasil')->autoclose(1500);
            }

            return redirect()->back();
        }
    }

    public function index()
    {
        if (Auth::guest()) {
            Alert::warning('Harap login terlebih dahulu untuk melihat item di keranjang', 'Maaf');
            return redirect()->back();
        } else {
            $keranjang = DB::table('keranjangs')
                ->join('products', 'products.id', '=', 'keranjangs.id_product')
                ->join('users', 'keranjangs.id_user', '=', 'users.id')
                ->select('keranjangs.*', 'nama_product as product_name', 'products.harga', 'products.gambar')
                ->where('id_user', Auth::user()->id)
                ->get();

            $harga = DB::table('keranjangs')
                ->join('products', 'products.id', '=', 'keranjangs.id_product')
                ->join('users', 'keranjangs.id_user', '=', 'users.id')
                ->select(DB::raw('SUM(products.harga*keranjangs.jumlah) as total'))
                ->where('id_user', Auth::user()->id)
                ->first();

            return view('keranjang', compact('keranjang', 'harga'));
        }
    }

    public function add(Request $request)
    {
        $product = [
            'id' => $request->id,
            'name' => $request->name,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
        ];

        $keranjangItem = Keranjang::where('id_product', '=', $request->id_product)
            ->where('id_user', '=', Auth::user()->id)
            ->first();

        if ($keranjangItem) {
            $keranjangItem->jumlah += $request->jumlah;
            $keranjangItem->save();
            Alert::success('Product quantity updated in cart', 'Good Job')->autoclose(1500);
        } else {
            $keranjang = new Keranjang;
            $keranjang->id_user = Auth::user()->id;
            $keranjang->id_product = $request->id_product;
            $keranjang->jumlah = $request->jumlah;
            $keranjang->save();
            Alert::success('Product added to cart', 'Good Job')->autoclose(1500);
        }

        return back()->with('berhasil', 'Data berhasil ditambahkan');
    }

    public function destroy(Keranjang $keranjang)
    {
        $keranjang->delete();
        Alert::success('Produk berhasil dihapus dari keranjang', 'Berhasil')->autoclose(1500);
        return redirect()->back();
    }

    public function clearCart()
    {
        Keranjang::where('id_user', Auth::user()->id)->delete();
        Alert::success('Cart cleared successfully', 'Success')->autoclose(1500);
        return redirect()->back();
    }
}
