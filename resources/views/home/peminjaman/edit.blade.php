@extends('layouts.master')
@section('title','Halaman Edit Data Peminjaman')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Data Peminjaman</h4>
                        </div>
                        <div class="card-body">
                            <form action="/peminjaman/{{$peminjaman->id}}/update" method="post">
                            @csrf


                            <div class="form-group">
                                <label for="">Nis</label>
                                <select name="nis" value="{{$peminjaman->nis}}" class="form-control">
                                    @foreach ($siswa as $s)
                                    <option value="{{$s->nis}}">{{$s->nis}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">User</label>
                                <select name="id_petugas" value="{{$peminjaman->id_petugas}}"  class="form-control">
                                    @foreach ($user as $u)
                                    <option value="{{$u->id}}">{{$u->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Pinjam</label>
                                <input type="date" class="form-control" value="{{$peminjaman->tgl_pinjam}}"  name="tgl_pinjam" placeholder="Masukan Untuk Tanggal Pinjam" required>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Pengembalian</label>
                                <input type="date" class="form-control" value="{{$peminjaman->tgl_kembali}}" name="tgl_kembali" placeholder="Masukan Untuk Tanggal Pinjam" required>
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status">
                                    <option value="diproses">Di Proses</option>
                                    <option value="dipinjam">Di Pinjam</option>
                                    <option value="selesai">Selesai</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/peminjaman" class="btn btn-secondary">Cancel</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
