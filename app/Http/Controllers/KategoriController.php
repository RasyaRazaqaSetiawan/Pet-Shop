<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Http\Middleware\IsAdmin;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', IsAdmin::class]);
    }

    public function index()
    {
        $kategori = Kategori::orderBy('id', 'desc')->get();
        confirmDelete('Kategori Dihapus', 'Apakah anda yakin ingin menghapusnya');
        return view('admin.kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('admin.kategori.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required|string|max:255|unique:kategoris',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'nama_kategori.required' => 'Nama Kategori harus terisi.',
        ]);

        $kategori = new Kategori;
        $kategori->nama_kategori = $request->input('nama_kategori');
        $kategori->slug = Str::slug($request->nama_kategori);

        if ($request->hasFile('gambar')) {
            $img = $request->file('gambar');
            $name = rand(1000, 9999) . '_' . $img->getClientOriginalName();
            $img->move(public_path('/images/kategori'), $name);
            $kategori->gambar = $name;
        }
        $kategori->save();

        Alert::success('Success', 'Kategori berhasil ditambahkan.');

        return redirect()->route('kategori.index');
    }

    public function show(Kategori $kategori)
    {
        return view('admin.kategori.show', compact('kategori'));
    }

    public function edit(Kategori $kategori)
    {
        return view('admin.kategori.edit', compact('kategori'));
    }

    public function update(Request $request, Kategori $kategori)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required|string|max:255|unique:kategoris,nama_kategori,' . $kategori->id,
            'gambar' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'nama_kategori.required' => 'Nama Kategori harus terisi.',
            'nama_kategori.unique' => 'Kategori tersebut sudah ada.',
        ]);

        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->slug = Str::slug($request->nama_kategori);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($kategori->gambar) {
                unlink(public_path('/images/kategori/' . $kategori->gambar));
            }

            $img = $request->file('gambar');
            $name = rand(1000, 9999) . '_' . $img->getClientOriginalName();
            $img->move(public_path('/images/kategori'), $name);
            $kategori->gambar = $name;
        }

        $kategori->save();

        Alert::success('Success', 'Data berhasil diubah.');

        return redirect()->route('kategori.index');
    }

    public function destroy(Kategori $kategori)
    {
        if ($kategori->gambar) {
            unlink(public_path('/images/kategori/' . $kategori->gambar));
        }

        $kategori->delete();
        Alert::success('Success', 'Kategori berhasil dihapus.');

        return redirect()->route('kategori.index');
    }
}
