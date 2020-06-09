<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DiklatFungsional;
use Pegawai;

class riwayatJabatanFungsionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riwayat_diklat_fungsional = DiklatFungsional::get();

        return view('riwayat_jabatan_fungsional', compact('riwayat_diklat_fungsional'));
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

        $riwayat_diklat_fungsional = DiklatFungsional::insert([
            'tahun' => $request->input('tahun', 2019),
            'pegawai_id' => $pegawai,
            'nama_diklat' => $request->nama_diklat,
            'tempat_belajar' => $request->tempat_belajar,
            'lokasi' => $request->lokasi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'tanggal_mulai' => $request->tanggal_mulai,
            'jumlah_jam' => $request->jumlah_jam,
            'penyelenggara' => $request->penyelenggara,
            'active' => $request->input('active', 1),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        \Session::flash('Berhasil', 'Data riwayat pendidikan formal berhasil ditambahkan');

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

        $riwayat_diklat_fungsional = DiklatFungsional::where('id', $id)->update([
            'tahun' => $request->input('tahun', 2019),
            'pegawai_id' => $pegawai,
            'nama_diklat' => $request->nama_diklat,
            'tempat_belajar' => $request->tempat_belajar,
            'lokasi' => $request->lokasi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'tanggal_mulai' => $request->tanggal_mulai,
            'jumlah_jam' => $request->jumlah_jam,
            'penyelenggara' => $request->penyelenggara,
            'active' => $request->input('active', 1),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        \Session::flash('Berhasil', 'Data riwayat pendidikan formal berhasil ditambahkan');

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
        $riwayat_diklat_fungsional = DiklatFungsional::where('id', $id)->delete();

        \Session::flash('Berhasil', 'Data riwayat pendidikan formal berhasil dihapus');

        return back();
    }
}
