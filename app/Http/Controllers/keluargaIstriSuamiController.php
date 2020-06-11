<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\KeluargaIstriSuami;

class keluargaIstriSuamiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keluarga_kandung = KeluargaIstriSuami::get();
       
        return view('keluarga_istri_suami', compact('keluarga_kandung'));
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
        $pegawai = Pegawai::max('id');

        $keluarga_kandung = KeluargaIstriSuami::insert([
            'tahun' => $request->input('tahun', 2020),
            'pegawai_id' => $pegawai_id,
            'nama' => $request->nama,
            'hubungan' => $request->hubungan,
            'pekerjaan' => $request->pekerjaan,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kondisi' => $request->kondisi,
            'active' => $request->input('active', 1),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        \Session::flash('Berhasil', 'Data keluarga istri suami berhasil ditambahkan');

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
        $pegawai = Pegawai::max('id');

        $keluarga_kandung = KeluargaIstriSuami::where('id', $id)->update([
            'tahun' => $request->input('tahun', 2020),
            'pegawai_id' => $pegawai_id,
            'nama' => $request->nama,
            'hubungan' => $request->hubungan,
            'pekerjaan' => $request->pekerjaan,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kondisi' => $request->kondisi,
            'active' => $request->input('active', 1),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        \Session::flash('Berhasil', 'Data keluarga istri suami berhasil diubah');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keluarga_kandung = KeluargaIstriSuami::where('id', $id)->delete();
   
        \Session::flash('Berhasil', 'Data keluarga istri suami berhasil dihapus');

        return back();
    }
}
