<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class kategori extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'kategoris';

    protected $fillable = ['id', 'nama_kategori', 'gambar'];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_kategori'
            ]
        ];
    }


    public $timestamps = true;

    public function product()
    {
        return $this->hasMany(Product::class, 'id_kategori');
    }

     //menghapus img
    public function deleteImage()
    {
        if ($this->gambar && file_exists(public_path('images/artikel' . $this->gambar))) {
            return unlink(public_path('images/artikel' . $this->gambar));
        }
    }
}
