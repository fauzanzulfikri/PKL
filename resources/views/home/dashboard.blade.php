@extends('layouts.master')
@section('title','dashboard')
@section('content')

<div class="content-wrapper pb-0">
    <div class="page-header flex-wrap">
        <h3 class="mb-0"> Hi, welcome back {{Auth()->User()->nama}}!<span class="pl-0 h6 pl-sm-2 text-muted d-inline-block"></span>
        </h3>
        <div class="d-flex">
            <button type="button" class="btn btn-sm bg-white btn-icon-text border ml-3">
                <i class="mdi mdi-printer btn-icon-prepend"></i> Print </button>
                <a href="/user">
            <button type="button" class="btn btn-sm ml-3 btn-success"> Add User </button>
        </a>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-12 stretch-card grid-margin">
            <div class="row">
                <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-warning">
                        <div class="card-body px-3 py-4">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="color-card">
                                    <p class="mb-0 color-card-head">Jumlah Siswa</p>
                                    <h2 class="text-white">{{$jumlah_siswa}}</h2>
                                </div>
                                <i class="card-icon-indicator mdi mdi-account-circle bg-inverse-icon-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-danger">
                        <div class="card-body px-3 py-4">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="color-card">
                                    <p class="mb-0 color-card-head">Jumlah Buku</p>
                                    <h2 class="text-white">{{$jumlah_buku}}
                                    </h2>
                                </div>
                                <i class="card-icon-indicator mdi mdi-file-document-box bg-inverse-icon-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
                    <div class="card bg-primary">
                        <div class="card-body px-3 py-4">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="color-card">
                                    <p class="mb-0 color-card-head">Jumlah Peminjaman</p>
                                    <h2 class="text-white">{{$jumlah_peminjaman}}
                                    </h2>
                                </div>
                                <i class="card-icon-indicator mdi mdi-chart-bar bg-inverse-icon-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-6 stretch-card pb-sm-3 pb-lg-0">
                    <div class="card bg-success">
                        <div class="card-body px-3 py-4">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="color-card">
                                    <p class="mb-0 color-card-head">Jumlah Pengembalian</p>
                                    <h2 class="text-white">{{$jumlah_pengembalian}}</h2>
                                </div>
                                <i class="card-icon-indicator mdi mdi-chart-bar bg-inverse-icon-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title pl-4"><b>History</b></h4>
                        <div class="table-responsive">

                            <table class="table table-striped table-hover table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Nis</th>
                                        <th>User</th>
                                        <th>Tanggal Pinjam</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1    
                                    @endphp
                                    @foreach ($peminjaman as $p)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$p->id}}</td>
                                                <td>{{$p->Siswa->nis}}</td>
                                                <td>{{$p->User->id}}</td>
                                                <td>{{$p->tgl_pinjam}}</td>
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
@endsection
