@extends('layouts.master')
@section('title','Halaman Siswa')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Kelola Data Siswa</h4>
                            <a href="/siswa/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>No Telepon</th>
                                            <th>Kelas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($siswa as $s)
                                                <tr>
                                                    <td>{{$s->nis}}</td>
                                                    <td>{{$s->nama}}</td>
                                                    <td>{{$s->no_telp}}</td>
                                                    <td>{{$s->Kelas->nama_kelas}}</td>
                                                    <td>

                                                    <a href="/siswa/{{$s->nis}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/siswa/{{$s->nis}}/hapus" class="btn btn-danger" onclick="return confirm('Yakin diHapus?')">Hapus</a>
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