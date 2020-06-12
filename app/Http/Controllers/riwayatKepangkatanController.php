<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kepangkatan;
use App\Pegawai;

class riwayatKepangkatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riwayat_kepangkatan = Kepangkatan::get();

        return view('riwayat_kepangkatan', compact('riwayat_kepangkatan'));
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
        $pegawai_id = Pegawai::max('id');

        $riwayat_kepangkatan = Kepangkatan::insert([
            'tahun' => $request->input('tahun', 2020),
            'pegawai_id' => $pegawai_id,
            'golongan' => $request->golongan,
            'tmt_golongan' => $request->tmt_golongan,
            'pejabat_penandatangan_sk' => $request->pejabat_penandatangan_sk,
            'nomor_sk' => $request->nomor_sk,
            'tanggal_sk' => $request->tanggal_sk,
            'active' => $request->input('active', 1),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        \Session::flash('Berhasil', 'Data riwayat kepangkatan berhasil ditambahkan');

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
        $pegawai_id = Pegawai::max('id');

        $riwayat_kepangkatan = Kepangkatan::where('id', $id)->update([
            'tahun' => $request->input('tahun', 2020),
            'pegawai_id' => $pegawai_id,
            'golongan' => $request->golongan,
            'tmt_golongan' => $request->tmt_golongan,
            'pejabat_penandatangan_sk' => $request->pejabat_penandatangan_sk,
            'nomor_sk' => $request->nomor_sk,
            'tanggal_sk' => $request->tanggal_sk,
            'active' => $request->input('active', 1),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        \Session::flash('Berhasil', 'Data riwayat kepangkatan berhasil diubah');

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
        $riwayat_kepangkatan = Kepangkatan::where('id', $id)->delete();

        \Session::flash('Berhasil', 'Data riwayat kepangkatan berhasil dihapus');

        return back();
    }
}
