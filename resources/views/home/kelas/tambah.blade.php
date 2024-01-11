@extends('layouts.master')
@section('title','Halaman Tambah Data Kelas')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah Data Kelas</h4>
                        </div>
                        <div class="card-body">
                            <form action="/kelas/simpan" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="">Kelas</label>
                                <input type="text" class="form-control" name="nama_kelas" placeholder="Masukan Untuk Kelas" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jurusan</label>
                                <input type="text" class="form-control" name="jurusan" placeholder="Masukan Untuk Jurusan" required>
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