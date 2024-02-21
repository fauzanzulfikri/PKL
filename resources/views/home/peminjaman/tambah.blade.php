@extends('layouts.master')
@section('title','Halaman Tambah Data Peminjaman')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah Data Peminjaman</h4>
                        </div>
                        <div class="card-body">
                            <form action="/peminjaman/simpan" method="post">
                            @csrf


                            <div class="form-group">
                                <label for="">Nama</label>
                                <select name="nis" class="form-control">
                                    @foreach ($siswa as $s)
                                    <option value="{{$s->nis}}">{{$s->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Petugas</label>
                                <select name="id_petugas" class="form-control">
                                    @foreach ($user as $u)
                                    <option value="{{$u->id}}">{{$u->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Pinjam</label>
                                <input type="date" class="form-control" name="tgl_pinjam" placeholder="Masukan Untuk Tanggal Pinjam" required>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Kembali</label>
                                <input type="date" class="form-control" name="tgl_kembali" placeholder="Masukan Untuk Tanggal Kembali" required>
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" class="form-control">
                                    <option value="diproses">Di Proses</option>
                                    <option value="dipinjam">Di Pinjam</option>
                                    <option value="selesai">Selesai</option>
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