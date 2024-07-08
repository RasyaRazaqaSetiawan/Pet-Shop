<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $product = Product::all();
        return view('welcome', compact('kategori','product'));
    }
}
