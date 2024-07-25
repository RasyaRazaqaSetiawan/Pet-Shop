<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Kategori;

class ShopController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $kategori = Kategori::all();
        return view('shop', compact('product', 'kategori'));
    }
}
