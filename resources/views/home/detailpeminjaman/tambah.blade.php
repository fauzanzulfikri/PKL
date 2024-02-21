@extends('layouts.master')
@section('title','Halaman Tambah Detail Peminjaman')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header"><h1>Halaman Tambah Detail Peminjaman</h1></div>
                        <div class="card-body">
                            <form action="/dpeminjaman/simpan" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="kode_buku">Pilih Buku:</label>
                                   <select name="kode_buku" class="form-control">
                                   @foreach($buku as $b)
                                   <option value="{{$b->id}}">{{ $b->judul }}</option>
                                   @endforeach
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah</label>
                                    <input type="number" class="form-control" name="jumlah" placeholder="Masukkan Untuk Jumlah" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan" placeholder="Masukkan Untuk Keterangan" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Id Peminjaman</label>
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
<script>
    $(document).ready(function() {
        $('.kode_buku_select2').select2();
    });
</script>

@endsection