<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\JabatanTeknis;

class riwayatJabatanTeknisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riwayat_pekerjaan_jabatan = JabatanTeknis::get();
        return view('riwayat_pekerjaan-jabatan', compact('riwayat_pekerjaan_jabatan'));

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

        $riwayat_pekerjaan_jabatan = JabatanTeknis::insert([
            'tahun' => $request->input('tahun', 2020),
            'pegawai_id' => $pegawai_id,
            'nama_jabatan' => $request->nama_jabatan,
            'tmt_golongan' => $request->tmt_jabatan,
            'tahun_mulai' => $request->tahun_mulai,
            'tahun_selesai' => $request->tahun_selesai,
            'nomor_sk' => $request->nomor_sk,
            'tanggal_sk' => $request->tanggal_sk,
            'nip_penjabat_penandatangan_sk' => $request->nip_penjabat_penandatangan_sk,
            'nip_lama_penjabat_penandatangan_sk' => $request->nip_lama_penjabat_penandatangan_sk,
            'pejabat_penandatangan_sk' => $request->pejabat_penandatangan_sk,
            'active' => $request->input('active', 1),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        \Session::flash('Berhasil', 'Data riwayat pekerjaaan / jabatan berhasil ditambahkan');

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

        $riwayat_pekerjaan_jabatan = JabatanTeknis::where('id', $id)->update([
            'tahun' => $request->input('tahun', 2020),
            'pegawai_id' => $pegawai_id,
            'nama_jabatan' => $request->nama_jabatan,
            'tmt_golongan' => $request->tmt_jabatan,
            'tahun_mulai' => $request->tahun_mulai,
            'tahun_selesai' => $request->tahun_selesai,
            'nomor_sk' => $request->nomor_sk,
            'tanggal_sk' => $request->tanggal_sk,
            'nip_penjabat_penandatangan_sk' => $request->nip_penjabat_penandatangan_sk,
            'nip_lama_penjabat_penandatangan_sk' => $request->nip_lama_penjabat_penandatangan_sk,
            'pejabat_penandatangan_sk' => $request->pejabat_penandatangan_sk,
            'active' => $request->input('active', 1),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        \Session::flash('Berhasil', 'Data riwayat pekerjaaan / jabatan berhasil diubah');

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
        $riwayat_pekerjaan_jabatan = JabatanTeknis::where('id', $id)->delete();

        \Session::flash('Berhasil', 'Data riwayat pekerjaaan / jabatan berhasil dihapus');

        return back();
    }
}
