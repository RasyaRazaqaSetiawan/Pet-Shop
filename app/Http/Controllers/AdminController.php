<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $jumlahuser = User::count();
        $jumlahproduct = Product::count();
        return view('include.backend.dashboard', compact('jumlahuser', 'jumlahproduct'));
    }
}
