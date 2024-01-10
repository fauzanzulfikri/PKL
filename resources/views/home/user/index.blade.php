@extends('layouts.master')
@section('title','Halaman User')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Kelola Data User</h4>
                            <a href="/user/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>No Telepon</th>
                                            <th>Jabatan</th>
                                            <th>Username</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $u)
                                                <tr>
                                                    <td>{{$u->id_petugas}}</td>
                                                    <td>{{$u->nama}}</td>
                                                    <td>{{$u->no_tlp}}</td>
                                                    <td>{{$u->jabatan}}</td>
                                                    <td>{{$u->username}}</td>

                                                    <a href="/user/{{$u->id_petugas}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/user/{{$u->id_petugas}}/hapus" class="btn btn-danger" onclick="return confirm('Yakin diHapus?')">Hapus</a>
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