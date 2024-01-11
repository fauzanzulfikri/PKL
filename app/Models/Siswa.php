<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $primaryKey= 'nis';
    protected $fillable=[
       'nis',
        'nama',
       'no_telp',
       'id_kelas',
    ];

    public function Kelas(){
        return $this->belongsTo(Kelas::class,'id_kelas','id');
    }
    public function Siswa()
    {
        return $this->hasMany(Siswa::class, 'nis', 'id');
    }
}
