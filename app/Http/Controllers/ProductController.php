<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Http\Middleware\IsAdmin;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', IsAdmin::class]);
    }

    public function index()
    {
        $product = Product::orderBy('id', 'desc')->get();
        confirmDelete('Produk Dihapus', 'Apakah anda yakin ingin menghapusnya');
        return view('admin.product.index', compact('product'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.product.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_product' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|string',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'id_kategori' => 'required|exists:kategoris,id',
        ]);

        $product = new Product();
        $product->nama_product = $request->nama_product;
        $product->slug = Str::slug($request->nama_product);
        $product->deskripsi = $request->deskripsi;
        $product->harga = $request->harga;
        $product->stok = $request->stok;
        $product->id_kategori = $request->id_kategori;

        if ($request->hasFile('gambar')) {
            $img = $request->file('gambar');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move(public_path('/images/product'), $name);
            $product->gambar = $name;
        }

        $product->save();

        Alert::success('Success', 'Product berhasil ditambahkan');

        return redirect()->route('product.index');
    }

    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $kategoris = Kategori::all();
        return view('admin.product.edit', compact('product', 'kategoris'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'nama_product' => 'required|string|max:255',
            'gambar' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|string',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'id_kategori' => 'required|exists:kategoris,id',
        ]);

        $product->nama_product = $request->nama_product;
        $product->slug = Str::slug($request->nama_product);
        $product->deskripsi = $request->deskripsi;
        $product->harga = $request->harga;
        $product->stok = $request->stok;
        $product->id_kategori = $request->id_kategori;

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($product->gambar) {
                unlink(public_path('/images/product/' . $product->gambar));
            }

            $img = $request->file('gambar');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move(public_path('/images/product'), $name);
            $product->gambar = $name;
        }

        $product->save();

        Alert::success('Success', 'Product berhasil diubah');

        return redirect()->route('product.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        Alert::success('Success', 'Data berhasil dihapus');

        return redirect()->route('product.index');
    }
}
