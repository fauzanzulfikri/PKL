@extends('layouts.master')
@section('title','Halaman Tambah Data User')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah Data User</h4>
                        </div>
                        <div class="card-body">
                            <form action="/user/simpan" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukan Untuk Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Masukan Untuk Username" required>
                            </div>
                            <div class="form-group">  
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Masukan Untuk Password" required>
                                @error('password')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">No Telepon</label>
                                <input type="number" class="form-control" name="no_telp" placeholder="Masukan Untuk No Telepon" required>
                                @error('no_telp')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jabatan</label>
                                <select name="jabatan" class="form-control">
                                    <option value="superadmin">Super Admin</option>
                                    <option value="admin">Admin</option>
                                </select>
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