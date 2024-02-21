<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\DetailPeminjaman;


class DetailPeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dpeminjaman = DetailPeminjaman::all();
        return view('home.detailpeminjaman.index', compact(['dpeminjaman']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Buku::all();
        $peminjaman = Peminjaman::all();
        return view('home.detailpeminjaman.tambah', compact(['buku','peminjaman']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $kode_buku = $request->kode_buku;
        $kb = $kode_buku;
        $buku = Buku::find($kb);

        // $request->validate([
        //     'kode_buku' => 'required|array',
        //     'kode_buku.*' => 'exists:bukus,id', // Pastikan setiap ID buku ada di dalam tabel buku
        // ]);
        DetailPeminjaman::create([
            'kode_buku'=>$request->kode_buku,
            'jumlah'=>$request->jumlah,
            'keterangan'=>$request->keterangan,
            'id_peminjaman'=>$request->id_peminjaman,
            $request->except('_token'),
        ]);
        $buku->update([
            'stok' => $buku->stok - $request->jumlah,
        ]);
        return redirect('/dpeminjaman');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::all();
        $peminjaman = Peminjaman::all();
        $dpeminjaman = DetailPeminjaman::find($id);
        return view('home.detailpeminjaman.edit', compact(['buku','peminjaman','dpeminjaman']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dpeminjaman = DetailPeminjaman::find($id);
        $dpeminjaman->update([
            'kode_buku'=>$request->kode_buku,
            'jumlah'=>$request->jumlah,
            'keterangan'=>$request->keterangan,
            'id_peminjaman'=>$request->id_peminjaman,
            $request->except('_token'),
        ]);
        return redirect('/dpeminjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dpeminjaman = DetailPeminjaman::find($id);
        $dpeminjaman->delete();
        return redirect('/dpeminjaman');
    }
    public function cetak()
    {
        $dpeminjaman = DetailPeminjaman::all();
        return view('home.detailpeminjaman.cetak', compact(['dpeminjaman']));
    }
}
