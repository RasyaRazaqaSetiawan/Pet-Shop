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

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'id_product');
    }


    //menghapus img
    public function deleteImage()
    {
        if ($this->gambar && file_exists(public_path('images/artikel' . $this->gambar))) {
            return unlink(public_path('images/artikel' . $this->gambar));
        }
    }

}
