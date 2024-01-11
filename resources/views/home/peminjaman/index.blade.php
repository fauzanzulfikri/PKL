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
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nis</th>
                                            <th>User</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($peminjaman as $p)
                                                <tr>
                                                    <td>{{$p->id}}</td>
                                                    <td>{{$p->Siswa->nis}}</td>
                                                    <td>{{$p->User->id}}</td>
                                                    <td>{{$p->tgl_pinjam}}</td>
                                                    <td>
                                                    <a href="/peminjaman/{{$p->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/peminjaman/{{$p->id}}/hapus" class="btn btn-danger" onclick="return confirm('Yakin diHapus?')">Hapus</a>
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