@extends('layouts.master')
@section('title','Halaman Edit Data Kelas')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Data Kelas</h4>
                        </div>
                        <div class="card-body">
                            <form action="/kelas/{{$kelas->id}}/update" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="">Kelas</label>
                                <input type="text" class="form-control" value="{{$kelas->nama_kelas}}" name="nama_kelas" placeholder="Masukan Untuk Kelas" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jurusan</label>
                                <input type="text" class="form-control" value="{{$kelas->jurusan}}" name="jurusan" placeholder="Masukan Untuk Jurusan" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/kelas" class="btn btn-secondary">Cancel</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection