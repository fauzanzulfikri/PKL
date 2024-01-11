<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPeminjaman extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_buku',
        'jumlah',
        'keterangan',
        'id_peminjaman',
    ];
    public function Buku()
    {
      return $this->belongsTo(Buku::class, 'kode_buku', 'id');
    }
    public function Peminjaman()
    {
      return $this->belongsTo(Peminjaman::class, 'id_peminjaman', 'id');
    }
}
