<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::All();
        return view('home.user.index', compact(['user']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.user.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'password' => 'required|string|min:5',
            'no_telp' => 'required|max:13',
        ],[
            'password.required' => 'Password harus lebih dari 5 Karakter',
        ]);
            User::create([
            'nama'=> $request->nama,
            'no_telp'=> $request->no_telp,
            'username'=> $request->username,
            'password'=> bcrypt($request->password),
            'jabatan'=> $request->jabatan,
            $request->except(['_token']),
        ]);return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id_petugas);
        return view('home.user.edit',compact(['user']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $user = User::find($id);
        $user->update([
        'nama'=> $request->nama,
        'no_telp'=> $request->no_telp,
        'username'=> $request->username,
        'password'=> bcrypt($request->password),
        'jabatan'=> $request->jabatan,
        $request->except(['_token']),
    ]);return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }
    public function __construct()
{
    $this->middleware('superadmin');
}
}
