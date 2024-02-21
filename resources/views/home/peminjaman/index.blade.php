@extends('layouts.master')
@section('title','Halaman Peminjaman')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Kelola Data Peminjaman</h4>
                            <a href="/peminjaman/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>User</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($peminjaman as $p)
                                                <tr>
                                                    <td>{{$p->id}}</td>
                                                    <td>{{$p->Siswa->nama}}</td>
                                                    <td>{{$p->User->username}}</td>
                                                    <td>{{$p->tgl_pinjam}}</td>
                                                    <td>{{$p->tgl_kembali}}</td>
                                                    <td>{{$p->status}}</td>
                                                    <td>
                                                    <a href="/peminjaman/{{$p->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/peminjaman/{{$p->id}}/hapus" class="btn btn-danger" onclick="return confirm('Yakin diHapus?')">Hapus</a>
                                                    <a href="/peminjaman/{{$p->id}}/struk" target="_blank" class="btn btn-success"><span class="mdi mdi-file-document">Struk</span></a>
                                                    <a href="/dpeminjaman" class="btn btn-dark">Detail</a>
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