@extends('layouts.master')
@section('title','Halaman Edit Data Pengembalian')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Data Pengembalian</h4>
                        </div>
                        <div class="card-body">
                            <form action="/pengembalian/{{$pengembalian->id}}/update" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="">Tanggal Pengembalian</label>
                                <input type="date" class="form-control" value="{{$pengembalian->tgl_pengembalian}}" name="tgl_pengembalian" placeholder="Masukan Untuk Pengembalian" required>
                            </div>
                            <div class="form-group">
                                <label for="">Denda</label>
                                <input type="text" class="form-control" value="{{$pengembalian->denda}}" name="denda" placeholder="Masukan Untuk Denda" required>
                            </div>
                            <div class="form-group">
                                <label for="">Peminjaman</label>
                                <select name="id_peminjaman" value="{{$pengembalian->id_peminjaman}}"  class="form-control">
                                    @foreach ($peminjaman as $p)
                                    <option value="{{$p->id}}">{{$p->id}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/pengembalian" class="btn btn-secondary">Cancel</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection