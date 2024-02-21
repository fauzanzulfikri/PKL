<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\DetailPeminjamanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DasboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[LoginController::class,'index']);
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/PostLogin',[LoginController::class,'login']);
Route::get('/logout',[LoginController::class,'logout']);

Route::group(['middleware' => ['auth', 'superadmin']], function () {
    // Rute-rute admin di sini
 Route::get('/user',[UserController::class,'index']);
Route::get('/user/tambah',[UserController::class,'create']);
Route::post('/user/simpan',[UserController::class,'store']);
Route::get('/user/{id}/edit',[UserController::class,'show']);
Route::post('/user/{id}/update',[UserController::class,'update']);
Route::get('/user/{id}/hapus',[UserController::class,'destroy']);

Route::get('/kelas',[KelasController::class,'index']);
Route::get('/kelas/tambah',[KelasController::class,'create']);
Route::post('/kelas/simpan',[KelasController::class,'store']);
Route::get('/kelas/{id}/edit',[KelasController::class,'show']);
Route::post('/kelas/{id}/update',[KelasController::class,'update']);
Route::get('/kelas/{id}/hapus',[KelasController::class,'destroy']);

Route::get('/siswa',[SiswaController::class,'index']);
Route::get('/siswa/tambah',[SiswaController::class,'create']);
Route::post('/siswa/simpan',[SiswaController::class,'store']);
Route::get('/siswa/{nis}/edit',[SiswaController::class,'show']);
Route::post('/siswa/{nis}/update',[SiswaController::class,'update']);
Route::get('/siswa/{nis}/hapus',[SiswaController::class,'destroy']);

Route::get('/buku',[BukuController::class, 'index']);
Route::get('/buku/tambah',[BukuController::class, 'create']);
Route::post('/buku/simpan',[BukuController::class,'store']);
Route::get('/buku/{id}/edit',[BukuController::class,'show']);
Route::post('/buku/{id}/update',[BukuController::class,'update']);
Route::get('/buku/{id}/hapus',[BukuController::class,'destroy']);

Route::get('/peminjaman',[PeminjamanController::class, 'index']);
Route::get('/peminjaman/tambah',[PeminjamanController::class, 'create']);
Route::post('/peminjaman/simpan',[PeminjamanController::class,'store']);
Route::get('/peminjaman/{id}/edit',[PeminjamanController::class,'show']);
Route::post('/peminjaman/{id}/update',[PeminjamanController::class,'update']);
Route::get('/peminjaman/{id}/hapus',[PeminjamanController::class,'destroy']);
Route::get('/peminjaman/{id}/struk',[PeminjamanController::class,'struk']);

Route::get('/pengembalian',[PengembalianController::class, 'index']);
Route::get('/pengembalian/tambah',[PengembalianController::class, 'create']);
Route::post('/pengembalian/simpan',[PengembalianController::class,'store']);
Route::get('/pengembalian/{id}/edit',[PengembalianController::class,'show']);
Route::post('/pengembalian/{id}/update',[PengembalianController::class,'update']);
Route::get('/pengembalian/{id}/hapus',[PengembalianController::class,'destroy']);
Route::get('/pengembalian/{id}/struk',[PengembalianController::class,'struk']);

Route::get('/dpeminjaman',[DetailPeminjamanController::class, 'index']);
Route::get('/dpeminjaman/tambah',[DetailPeminjamanController::class, 'create']);
Route::post('/dpeminjaman/simpan',[DetailPeminjamanController::class,'store']);
Route::get('/dpeminjaman/{id}/edit',[DetailPeminjamanController::class,'show']);
Route::post('/dpeminjaman/{id}/update',[DetailPeminjamanController::class,'update']);
Route::get('/dpeminjaman/{id}/hapus',[DetailPeminjamanController::class,'destroy']);
Route::get('/dpeminjaman/cetak',[DetailPeminjamanController::class,'cetak']);
Route::get('/dashboard',[DasboardController::class,'index']);
});

Route::group(['middleware' => ['auth']], function () {
    // Rute-rute untuk pengguna biasa di sini
    Route::get('/kelas',[KelasController::class,'index']);
    Route::get('/kelas/tambah',[KelasController::class,'create']);
    Route::post('/kelas/simpan',[KelasController::class,'store']);
    Route::get('/kelas/{id}/edit',[KelasController::class,'show']);
    Route::post('/kelas/{id}/update',[KelasController::class,'update']);
    Route::get('/kelas/{id}/hapus',[KelasController::class,'destroy']);
    
    Route::get('/siswa',[SiswaController::class,'index']);
    Route::get('/siswa/tambah',[SiswaController::class,'create']);
    Route::post('/siswa/simpan',[SiswaController::class,'store']);
    Route::get('/siswa/{nis}/edit',[SiswaController::class,'show']);
    Route::post('/siswa/{nis}/update',[SiswaController::class,'update']);
    Route::get('/siswa/{nis}/hapus',[SiswaController::class,'destroy']);
    
    Route::get('/buku',[BukuController::class, 'index']);
    Route::get('/buku/tambah',[BukuController::class, 'create']);
    Route::post('/buku/simpan',[BukuController::class,'store']);
    Route::get('/buku/{id}/edit',[BukuController::class,'show']);
    Route::post('/buku/{id}/update',[BukuController::class,'update']);
    Route::get('/buku/{id}/hapus',[BukuController::class,'destroy']);
    
    Route::get('/peminjaman',[PeminjamanController::class, 'index']);
    Route::get('/peminjaman/tambah',[PeminjamanController::class, 'create']);
    Route::post('/peminjaman/simpan',[PeminjamanController::class,'store']);
    Route::get('/peminjaman/{id}/edit',[PeminjamanController::class,'show']);
    Route::post('/peminjaman/{id}/update',[PeminjamanController::class,'update']);
    Route::get('/peminjaman/{id}/hapus',[PeminjamanController::class,'destroy']);
    Route::get('/peminjaman/{id}/struk',[PeminjamanController::class,'struk']);
    
    Route::get('/pengembalian',[PengembalianController::class, 'index']);
    Route::get('/pengembalian/tambah',[PengembalianController::class, 'create']);
    Route::post('/pengembalian/simpan',[PengembalianController::class,'store']);
    Route::get('/pengembalian/{id}/edit',[PengembalianController::class,'show']);
    Route::post('/pengembalian/{id}/update',[PengembalianController::class,'update']);
    Route::get('/pengembalian/{id}/hapus',[PengembalianController::class,'destroy']);
    Route::get('/pengembalian/{id}/struk',[PengembalianController::class,'struk']);
    
    Route::get('/dpeminjaman',[DetailPeminjamanController::class, 'index'])->name('detailpeminjaman');
    Route::get('/dpeminjaman/tambah',[DetailPeminjamanController::class, 'create']);
    Route::post('/dpeminjaman/simpan',[DetailPeminjamanController::class,'store']);
    Route::get('/dpeminjaman/{id}/edit',[DetailPeminjamanController::class,'show']);
    Route::post('/dpeminjaman/{id}/update',[DetailPeminjamanController::class,'update']);
    Route::get('/dpeminjaman/{id}/hapus',[DetailPeminjamanController::class,'destroy']);
    Route::get('/dpeminjaman/cetak',[DetailPeminjamanController::class,'cetak']);   
    Route::get('/dashboard',[DasboardController::class,'index']);
 });
