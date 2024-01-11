@extends('layouts.master')
@section('title','Halaman Tambah Data Siswa')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah Data Siswa</h4>
                        </div>
                        <div class="card-body">
                            <form action="/siswa/{{$siswa->nis}}/update" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="">Nis</label>
                                <input type="number" class="form-control" value="{{$siswa->nis}}" name="nis" placeholder="Masukan Untuk Nis" required>
                            </div>
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" value="{{$siswa->nama}}" name="nama" placeholder="Masukan Untuk Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="">No Telepon</label>
                                <input type="number" class="form-control" value="{{$siswa->no_telp}}" name="no_telp" placeholder="Masukan Untuk No Telepon" required>
                            </div>
                            <div class="form-group">
                                <label for="">Kelas</label>
                                <select name="id_kelas" value="{{$siswa->id_kelas}}" class="form-control">
                                    @foreach ($kelas as $k)
                                    <option value="{{$k->id}}">{{$k->nama_kelas}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/siswa" class="btn btn-secondary">Cancel</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection