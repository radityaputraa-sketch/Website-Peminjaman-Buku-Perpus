<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'judul',
        'penulis',
        'kategori',
        'tahun',
        'sinopsis',
        'cover',
        'stok'
    ];

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}