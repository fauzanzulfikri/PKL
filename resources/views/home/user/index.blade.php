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
                                <table class="table table-striped table-hover table-bordered" id="example">
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
                                                    <td>{{$u->id}}</td>
                                                    <td>{{$u->nama}}</td>
                                                    <td>{{$u->no_telp}}</td>
                                                    <td>{{$u->jabatan}}</td>
                                                    <td>{{$u->username}}</td>
                                                    <td>
                                                    <a href="/user/{{$u->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/user/{{$u->id}}/hapus" class="btn btn-danger" onclick="return confirm('Yakin diHapus?')">Hapus</a>
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