<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    protected $table = 'kategoris'; 

    protected $fillable = ['id', 'nama_kategori', 'deskripsi'];

    public $timestamps = true;

    public function product()
    {
        return $this->hasMany(Product::class, 'id_kategori');
    }
}
