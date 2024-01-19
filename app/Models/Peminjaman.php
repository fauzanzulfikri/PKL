<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $fillable = [
        'nis',
        'id_petugas',
        'tgl_pinjam',
        'tgl_kembali',
        'status',
    ];

    public function Siswa()
    {
        return $this->belongsTo(Siswa::class, 'nis', 'nis');
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'id_petugas', 'id');
    }
    public function Peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'id_peminjaman', 'id');
    }
}
