<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Http\Middleware\IsAdmin;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', IsAdmin::class]);
    }

    public function index()
    {
        $kategori = Kategori::orderBy('id','desc')->get();
        return view('kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required|string|max:255|unique:kategoris',
            'deskripsi' => 'required',
        ], [
            'nama_kategori.required' => 'Nama Kategori Harus Terisi',
            'nama_kategori.unique' => 'Kategori tersebut sudah ada',
        ]);

        $kategori = new Kategori;
        $kategori->nama_kategori = $request->input('nama_kategori');
        $kategori->deskripsi = $request->input('deskripsi');
        $kategori->save();

        return redirect()->route('kategori.index')
            ->with('success', 'Kategori berhasil ditambahkan');
    }

    public function show(Kategori $kategori)
    {
        return view('kategori.show', compact('kategori'));
    }

    public function edit(Kategori $kategori)
    {
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, Kategori $kategori)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required|string|max:255|unique:kategoris',
            'deskripsi' => 'required',
        ], [
            'nama_kategori.required' => 'Nama Kategori Harus Terisi',
            'nama_kategori.unique' => 'Kategori tersebut sudah ada',
            'deskripsi.required' => 'Deskripsi Harus Terisi',
        ]);

        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->deskripsi = $request->deskripsi;
        
        $kategori->save();

        return redirect()->route('kategori.index')
            ->with('success', 'Data berhasil diubah');
    }

    public function destroy(Kategori $kategori)
    {
        if ($kategori->cover && file_exists(public_path('images/kategori/' . $kategori->cover))) {
            unlink(public_path('images/kategori/' . $kategori->cover));
        }

        $kategori->delete();
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus');
    }
}
