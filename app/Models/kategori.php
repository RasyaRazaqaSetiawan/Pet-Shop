<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    protected $table = 'kategoris'; 

    protected $fillable = ['id', 'nama_kategori', 'cover', 'deskripsi'];

    public $timestamps = true;

    // menghapus cover
    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/kategori' . $this->cover))) {
            return unlink(public_path('images/kategori' . $this->cover));
        }
    }
}
