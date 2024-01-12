<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Pengembalian;

class DasboardController extends Controller
{
    public function index(){
        $jumlah_siswa = Siswa::count();
        $jumlah_buku = Buku::count();
        $jumlah_peminjaman = Peminjaman::count();
        $jumlah_pengembalian = Pengembalian::count();
        $peminjaman = Peminjaman::all();
        return view('home.dashboard', compact(['jumlah_siswa','jumlah_buku','jumlah_peminjaman','jumlah_pengembalian','peminjaman']));
    }
}
