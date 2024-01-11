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
                                <table
                                    class="table table-primary">
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
                                            <td>{{$kembali->tgl_kembali}}</td>
                                            <td>{{$kembali->denda}}</td>
                                            <td>{{$kembali->Peminjaman->id}}</td>
                                            <td>
                                            <a href="/pengembalian/{{$kembali->id}}/edit" class="btn btn-warning">Edit</a>
                                            <a href="/pengembalian/{{$kembali->id}}/hapus" class="btn btn-danger" onclick="return confirm('Yakin diHapus?')">Hapus</a>
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