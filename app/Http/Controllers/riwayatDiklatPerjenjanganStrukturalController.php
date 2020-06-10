<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\DiklatPenjenjangan;

class riwayatDiklatPerjenjanganStrukturalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riwayat_diklat_penjenjangan_struktural = DiklatPenjenjangan::get();
        
        return view('riwayat_diklat_penjenjangan-struktural', compact('riwayat_diklat_penjenjangan_struktural'));
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

        $pendidikan_formal = DiklatPerjenjangan::insert([
            'tahun' => $request->input('tahun', 2019),
            'pegawai_id' => $pegawai_id,
            'jenis_diklat' => $request->jenis_diklat,
            'angkatan' => $request->angkatan,
            'lokasi' => $request->lokasi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'jumlah_jam' => $request->jumlah_jam,
            'penyelenggara' => $request->penyelenggara,
            'predikat' => $request->predikat,
            'active' => $request->input('active', 1),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        \Session::flash('Berhasil', 'Data diklat perjenjangan struktural berhasil ditambahkan');

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

        $pendidikan_formal = DiklatPerjenjangan::where('id', $id)->update([
            'tahun' => $request->input('tahun', 2019),
            'pegawai_id' => $pegawai_id,
            'jenis_diklat' => $request->jenis_diklat,
            'angkatan' => $request->angkatan,
            'lokasi' => $request->lokasi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'jumlah_jam' => $request->jumlah_jam,
            'penyelenggara' => $request->penyelenggara,
            'predikat' => $request->predikat,
            'active' => $request->input('active', 1),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        \Session::flash('Berhasil', 'Data diklat perjenjangan struktural berhasil diubah');

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
        $pendidikan_formal = DiklatPerjenjangan::where('id', $id)->delete();

        \Session::flash('Berhasil', 'Data diklat perjenjangan struktural berhasil dihapus');

        return back();
    }
}
