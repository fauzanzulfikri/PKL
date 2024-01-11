<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::All();
        return view('home.siswa.index', compact(['siswa']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('home.siswa.tambah', compact(['kelas']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Siswa::create([
            'nis'=>$request->nis,
            'nama'=>$request->nama,
            'no_telp'=>$request->no_telp,
            'id_kelas'=>$request->id_kelas,
            $request->except('_token'),
        ]);
        return redirect('/siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nis)
    {
        $siswa = Siswa::find($nis);
        $kelas = Kelas::all();
        return view('home.siswa.edit',compact(['siswa','kelas']));
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
    public function update(Request $request, $nis)
    {
        $siswa = Siswa::find($nis);
        $siswa->update([
            'nis'=>$request->nis,
            'nama'=>$request->nama,
            'no_telp'=>$request->no_telp,
            'id_kelas'=>$request->id_kelas,
            $request->except('_token'),
    ]);return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nis)
    {
        $siswa = Siswa::find($nis);
        $siswa->delete();
        return redirect('/siswa');
    }
}
