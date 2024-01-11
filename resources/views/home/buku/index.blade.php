@extends('layouts.master')
@section('title','Halaman Buku')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header"><h1>Halaman Buku</h1>
                        <a href="/buku/tambah" class="btn btn-primary">Tambah Data</a></div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kode Buku</th>
                                            <th>Judul</th>
                                            <th>Penulis</th>
                                            <th>Penerbit</th>
                                            <th>Genre</th>
                                            <th>Sinopsis</th>
                                            <th>Status</th>
                                            <th>Stok</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($buku as $b)
                                                <tr>
                                                    <td>{{$b->id}}</td>
                                                    <td>{{$b->judul}}</td>
                                                    <td>{{$b->penulis}}</td>
                                                    <td>{{$b->penerbit}}</td>
                                                    <td>{{$b->genre}}</td>
                                                    <td>{{$b->sinopsis}}</td>
                                                    <td>{{$b->status}}</td>
                                                    <td>{{$b->stok}}</td>
                                                    <td>
                                                    <a href="/buku/{{$b->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/buku/{{$b->id}}/hapus" class="btn btn-danger" onclick="return confirm('Yakin diHapus?')">Hapus</a>
                                                </td>
                                                </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                            
                        </div>
                    </div>
                </div>
            </div>
        
    </section>
</div>

@endsection