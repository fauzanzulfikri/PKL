@extends('layouts.master')
@section('title','Halaman Edit Data Buku')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Data Buku</h4>
                        </div>
                        <div class="card-body">
                            <form action="/buku/{{$buku->id}}/update" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Judul</label>
                                <input type="text" class="form-control" value="{{$buku->judul}}" name="judul" placeholder="Masukan Untuk Judul" required>
                            </div>
                            <div class="form-group">
                                <label for="">Penulis</label>
                                <input type="text" class="form-control" value="{{$buku->penulis}}" name="penulis" placeholder="Masukan Untuk Penulis" required>
                            </div>
                            <div class="form-group">
                                <label for="">Penerbit</label>
                                <input type="text" class="form-control" value="{{$buku->penerbit}}" name="penerbit" placeholder="Masukkan Untuk Penerbit" required>
                            </div>
                            <div class="form-group">
                                <label for="">Genre</label>
                                <input type="text" class="form-control" value="{{$buku->genre}}" name="genre" placeholder="Masukkan Untuk Genre" required>
                            </div>
                            <div class="form-group">
                                <label for="">Sinopsis</label>
                                <input type="text" class="form-control" value="{{$buku->sinopsis}}" name="sinopsis" placeholder="Maukkan untuk sinopsis" required>
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" value="{{$buku->status}}" class="form-control">
                                    <option value="tak tersedia">Tak Tersedia</option>
                                    <option value="tersedia">Tersedia</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Stok</label>
                                <input type="number" class="form-control" value="{{$buku->stok}}" name="stok" placeholder="Maukkan untuk sinopsis" required>
                            </div>
                            <div class="form-group">
                                <label for="">Unggah Foto</label>
                                <input type="file" class="form-control" name="fotobuku" value="{{$buku->fotobuku}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/buku" class="btn btn-secondary">Cancel</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection