@extends('layouts.master')
@section('title','Halaman Tambah Data pengembalian')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah Data Pengembalian</h4>
                        </div>
                        <div class="card-body">
                            <form action="/pengembalian/simpan" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Tanggal Kembali</label>
                                <input type="date" class="form-control" name="tgl_kembali" placeholder="Masukan Tanggal" required>
                            </div>
                            <div class="form-group">
                                <label for="">Denda</label>
                                <input type="text" class="form-control" name="denda" placeholder="Masukan Nominal Denda" required>
                            </div>
                            <div class="form-group">
                                <label for="">ID Peminjamn</label>
                                <select name="id_peminjaman" class="form-control">
                                    @foreach ($peminjaman as $p)
                                    <option value="{{$p->id}}">{{$p->id}}</option>
                                    @endforeach
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