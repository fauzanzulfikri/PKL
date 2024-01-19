@extends('layouts.master')
@section('title','Halaman Tambah Buku')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header"><h1>Halaman Tambah Buku</h1></div>
                        <div class="card-body">
                            <form action="/buku/simpan" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Judul</label>
                                    <input type="text" class="form-control" name="judul" placeholder="Masukan Untuk Judul" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Penulis</label>
                                    <input type="text" class="form-control" name="penulis" placeholder="Masukkan Untuk Penulis" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Penerbit</label>
                                    <input type="text" class="form-control" name="penerbit" placeholder="Masukkan Untuk Penerbit" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Genre</label>
                                    <input type="text" class="form-control" name="genre" placeholder="Masukkan Untuk Genre" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Sinopsis</label>
                                    <input type="text" class="form-control" name="sinopsis" placeholder="Masukkan Untuk Sinopsis" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="tak tersedia">Tak Tersedia</option>
                                        <option value="tersedia">Tersedia</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Stok</label>
                                    <input type="number" class="form-control" name="stok" id="" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection