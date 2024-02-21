<?php

namespace App\Http\Controllers;
use App\Models\Buku;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        return view('home.buku.index', compact(['buku']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Buku::all();
        return view('home.buku.tambah', compact(['buku']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->file('fotobuku');
        $nama = hexdec(uniqid());
        $ext = strtolower($img->getClientOriginalExtension());
        $foto = $nama.'.'.$ext;
        $img->move('gambar/buku/',$foto);

        Buku::create([
            'judul'=> $request->judul,
            'penulis'=> $request->penulis,
            'penerbit'=> $request->penerbit,
            'genre'=> $request->genre,
            'sinopsis'=> $request->sinopsis,
            'status'=> $request->status,
            'stok'=> $request->stok,
            'fotobuku' =>$foto,
            $request->except(['_token']),
        ]);
        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::find($id);
        return view('home.buku.edit',compact(['buku']));
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
        $img = $request->file('fotobuku');
        $nama = hexdec(uniqid());
        $ext = strtolower($img->getClientOriginalExtension());
        $foto = $nama.'.'.$ext;
        $img->move('gambar/buku/',$foto);

        $buku = Buku::find($id);
        $buku->update([
            'judul'=> $request->judul,
            'penulis'=> $request->penulis,
            'penerbit'=> $request->penerbit,
            'genre'=> $request->genre,
            'sinopsis'=> $request->sinopsis,
            'status'=> $request->status,
            'stok'=> $request->stok,
            'fotobuku' => $foto,
            $request->except(['_token']),
        ]);return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku');
    }
}
