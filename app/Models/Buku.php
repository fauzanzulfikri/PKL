<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $fillable =[
        'judul',
        'penulis',
        'penerbit',
        'genre',
        'sinopsis',
        'status',
        'stok',
        'fotobuku',
    ];
    public function Buku()
    {
        return $this->hasMany(Buku::class, 'kode_buku', 'id');
    }
}
