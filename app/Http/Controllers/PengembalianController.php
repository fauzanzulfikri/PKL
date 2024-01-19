<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengembalian;
use App\Models\Peminjaman;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengembalian = Pengembalian::all();
        return view('home.pengembalian.index', compact(['pengembalian']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peminjaman = Peminjaman::all();
        return view('home.pengembalian.tambah', compact(['peminjaman']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pengembalian::create([
            'tgl_pengembalian'=>$request->tgl_pengembalian,
            'denda'=>$request->denda,
            'id_peminjaman'=>$request->id_peminjaman,
            $request->except('_token'),
        ]);
        return redirect('/pengembalian');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peminjaman = Peminjaman::all();
        $pengembalian = Pengembalian::find($id);
        return view('home.pengembalian.edit', compact(['pengembalian','peminjaman']));
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
        $pengembalian = Pengembalian::find($id);
        $pengembalian ->update([
            'tgl_pengembalian'=>$request->tgl_pengembalian,
            'denda'=>$request->denda,
            'id_peminjaman'=>$request->id_peminjaman,
            $request->except('_token'),
        ]);
        return redirect('/pengembalian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengembalian = Pengembalian::find($id);
        $pengembalian->delete();
        return redirect('/pengembalian');
    }
    public function struk($id)
    {
        $pengembalian = Pengembalian::find($id);
        return view('home.pengembalian.struk',compact(['pengembalian']));
    }
}
