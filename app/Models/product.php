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

    //menghapus img
    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/artikel' . $this->cover))) {
            return unlink(public_path('images/artikel' . $this->cover));
        }
    }

}
