<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsAdmin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    // Constructor dengan middleware untuk memastikan hanya admin yang dapat mengakses
    public function __construct()
    {
        $this->middleware(['auth', IsAdmin::class])->except(['edit', 'update', 'tampil']);
    }

    // Menampilkan semua user untuk admin
    public function index()
    {
        $user = User::orderBy('id', 'desc')->get();
        return view('admin.user.index', compact('user'));
    }

    // Form untuk menambahkan user baru
    public function create()
    {
        return view('admin.user.create');
    }

    // Menyimpan user baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('user.index')->with('success', 'User created successfully.');
    }

    // Menampilkan detail user untuk admin
    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    // Menampilkan profil user untuk pengguna biasa
    public function tampil(User $user)
    {
        return view('profile', compact('user'));
    }

    // Form edit profil user
    public function edit(User $user)
    {
        // Hanya user yang sedang login yang bisa edit profilnya sendiri
        if (Auth::user()->id !== $user->id) {
            return redirect()->route('home')->with('error', 'Unauthorized');
        }

        return view('profile', compact('user'));
    }

    // Update profil user
    public function update(Request $request, User $user)
    {
        $user = Auth::user(); // Mendapatkan user yang sedang login

        // Validasi data yang dikirimkan dari form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'telepon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Mengisi data dari request ke model User
        $user->name = $request->name;
        $user->email = $request->email;
        $user->telepon = $request->telepon;
        $user->alamat = $request->alamat;

        // Upload dan simpan foto jika ada
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName, 'public');
            $user->photo = $filePath;
        }

        // Simpan perubahan pada model User
        $user->save();
        
        // SweetAlert notification
        Alert::success('Sukses', 'Profil Anda berhasil diperbarui.');

        // Tambahkan SweetAlert atau flash message berhasil disimpan
        return redirect()->back();
    }

    // Menghapus user
    public function destroy(User $user)
    {
        if (Auth::user()->id != $user->id) {
            $user->delete();
            return redirect()->route('user.index')->with('success', 'User deleted successfully.');
        }
        return redirect()->route('user.index')->with('error', 'Unauthorized to delete user.');
    }
}
