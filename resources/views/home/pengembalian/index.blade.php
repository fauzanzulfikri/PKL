@extends('layouts.master')
@section('title','Halaman Pengembalian')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Kelola Data Pengembalian</h4>
                            <a href="/pengembalian/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Denda</th>
                                            <th>ID Peminjaman</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengembalian as $kembali)
                                        <tr>
                                            <td>{{$kembali->id}}</td>
                                            <td>{{$kembali->tgl_pengembalian}}</td>
                                            <td>Rp.{{number_format($kembali->denda)}}</td>
                                            <td>{{$kembali->Peminjaman->id}}</td>
                                            <td>
                                            <a href="/pengembalian/{{$kembali->id}}/edit" class="btn btn-warning">Edit</a>
                                            <a href="/pengembalian/{{$kembali->id}}/hapus" class="btn btn-danger" onclick="return confirm('Yakin diHapus?')">Hapus</a>
                                            <a href="/pengembalian/{{$kembali->id}}/struk" target="_blank" class="btn btn-success"><span class="mdi mdi-file-document">Struk</span></a>
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