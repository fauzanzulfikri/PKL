<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;
    protected $fillable=[
        'tgl_kembali',
        'denda',
        'id_peminjaman',
     ];
     public function Peminjaman(){
        return $this->belongsTo(Peminjaman::class,'id_peminjaman','id');
    }
}
