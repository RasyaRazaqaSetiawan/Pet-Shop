<?php

namespace App\Models;

use App\Models\DetailTransaksi;
use App\Models\Product;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_product',
        'jumlah',
    ];
    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'keranjang_id');
    }
    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class);
    }
}