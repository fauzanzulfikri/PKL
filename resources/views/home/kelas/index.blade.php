@extends('layouts.master')
@section('title','Halaman Kelas')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Kelola Data Kelas</h4>
                            <a href="/kelas/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Kelas</th>
                                            <th>Jurusan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kelas as $k)
                                                <tr>
                                                    <td>{{$k->id}}</td>
                                                    <td>{{$k->nama_kelas}}</td>
                                                    <td>{{$k->jurusan}}</td>
                                                    <td>

                                                    <a href="/kelas/{{$k->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/kelas/{{$k->id}}/hapus" class="btn btn-danger" onclick="return confirm('Yakin diHapus?')">Hapus</a>
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