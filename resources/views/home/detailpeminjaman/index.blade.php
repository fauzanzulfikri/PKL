@extends('layouts.master')
@section('title','Halaman Detail Peminjaman')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Kelola Data Detail Peminjaman</h4>
                            <a href="/dpeminjaman/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Buku</th>
                                            <th>Jumlah</th>
                                            <th>Keterangan</th>
                                            <th>Id Peminjaman</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dpeminjaman as $dp)
                                                <tr>
                                                    <td>{{$dp->id}}</td>
                                                    <td>{{$dp->Buku->judul}}</td>
                                                    <td>{{$dp->jumlah}}</td>
                                                    <td>{{$dp->keterangan}}</td>
                                                    <td>{{$dp->Peminjaman->id}}</td>
                                                    <td>

                                                    <a href="/dpeminjaman/{{$dp->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/dpeminjaman/{{$dp->id}}/hapus" class="btn btn-danger" onclick="return confirm('Yakin diHapus?')">Hapus</a>
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