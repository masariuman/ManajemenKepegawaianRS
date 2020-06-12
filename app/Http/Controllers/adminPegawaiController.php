<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\User;
use Illuminate\Support\Facades\Hash;

class adminPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin/pegawai/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $spasi = '';
        $spasi2 = '';
        if ($request->gelar_depan != null) {
            $spasi = '. ';
        }
        if($request->gelar_belakang !=null) {
            $spasi2 = ', ';
        }
        $nama = $request->gelar_depan.$spasi.$request->nama.$spasi2.$request->gelar_belakang;
        $lahir = explode("-",$request->tanggal_lahir);
        $lahir = $lahir[2].$lahir[1].$lahir[0];
        $password = Hash::make($lahir);
        User::create([
            'name' => $nama,
            'email' => $request->email,
            'password' => $password
        ]);
        $newuser = User::where('email',$request->email)->first();
        Pegawai::create([
            'nama_pegawai' => $request->nama,
            'gelar_depan' => $request->gelar_depan,
            'gelar_belakang'=> $request->gelar_belakang,
            'tanggal_lahir' => $request->tanggal_lahir,
            'user_id' => $newuser->id
        ]);

        $pesan = 'User baru telah dibuat. Silahkan memberitahu pegawai untuk login dengan email <b>'.$newuser->email.'</b> dan dengan password tanggal lahir(<b>'.$lahir.'</b>) untuk melengkapi data dasar.';

        \Session::flash('Berhasil', $pesan);

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
