<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Http\Middleware\IsAdmin;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', IsAdmin::class]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kategori = Kategori::all();

        // Ambil ID kategori dari request
        $id_kategori = $request->get('id_kategori');

        // Jika id_kategori ada dan tidak kosong, filter product berdasarkan kategori tersebut
        if ($id_kategori) {
            $product = Product::where('id_kategori', $id_kategori)->get();
        } else {
            // Jika tidak, ambil semua product
            $product = Product::orderBy('created_at', 'desc')->get();

        }

        return view('product.index', compact('product', 'kategori', 'id_kategori'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('product.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        $product->deskripsi = $request->deskripsi;
        $product->harga = $request->harga;
        $product->stok = $request->stok;
        $product->id_kategori = $request->id_kategori;

        if ($request->hasFile('gambar')) {
            $img = $request->file('gambar');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/product', $name);
            $product->gambar = $name;
        }

        $product->save();

        return redirect()->route('product.index')
            ->with('success', 'Product berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        $kategori = Kategori::all();
        return view('product.edit', compact('product', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
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
        $product->deskripsi = $request->deskripsi;
        $product->harga = $request->harga;
        $product->stok = $request->stok;
        $product->id_kategori = $request->id_kategori;

        if ($request->hasFile('gambar')) {
            $img = $request->file('gambar');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/product', $name);
            $product->gambar = $name;
        }

        $product->save();

        return redirect()->route('product.index')
            ->with('success', 'Product berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        $product = Product::FindOrFail($product);
        $product->delete();
        return redirect()->route('product.index')
            ->with('success', 'data berhasil dihapus');
    }
}

