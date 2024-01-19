@extends('layouts.master')
@section('title','Halaman Edit Data User')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Data User</h4>
                        </div>
                        <div class="card-body">
                            <form action="/user/{{$user->id}}/update" method="post">
                            @csrf


                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" value="{{$user->nama}}" name="nama" placeholder="Masukan Untuk Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" value="{{$user->username}}" name="username" placeholder="Masukan Untuk Username" required>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" value="{{$user->password}}" name="password" placeholder="Masukan Untuk Password" required>
                            </div>
                            <div class="form-group">
                                <label for="">No Telepon</label>
                                <input type="number" class="form-control" value="{{$user->no_telp}}" name="no_telp" placeholder="Masukan Untuk No Telepon" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jabatan</label>
                                <select name="jabatan" value="{{$user->jabatan}}" class="form-control">
                                    <option value="superadmin">Super Admin</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/user" class="btn btn-secondary">Cancel</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection