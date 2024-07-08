<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DetailController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('de`tail', compact('product'));
    }
}
