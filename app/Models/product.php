<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['id', 'nama_product', 'gambar', 'deskripsi', 'harga', 'stok', 'id_kategori'];

    public $timestamps = true;

    //relasi ke tabel kategori
    public function Kategori()
    {
        return $this->BelongsTo(Kategori::class, 'id_kategori');
    }

    public function keranjang()
    {
        return $this->belongsToMany(Keranjang::class);
    }


    //menghapus img
    public function deleteImage()
    {
        if ($this->gambar && file_exists(public_path('images/product' . $this->gambar))) {
            return unlink(public_path('images/product' . $this->gambar));
        }
    }

}
