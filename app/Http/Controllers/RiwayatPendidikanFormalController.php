<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatPendidikanFormalController extends Controller
{
    public function tambah(Request $request) {
        $riwayat = \DB::table('riwayat')->insert([
              'tingkat_pendidikan' => $request->tingkat_pendidikan,
              'nama_sekolah' => $request->nama_sekolah,
              'jurusan_program_studi' => $request->jurusan_program_studi,
              'tahun_masuk' => $request->tahun_masuk,
              'tahun_lulus' => $request->tahun_lulus,
              'tempat_belajar' => $request->tahun_lulus,
              'lokasi' => $request->lokasi,
              'nomor_ijazah' => $request->nomor_ijazah,      
        ]);

        return $riwayat;
    }
}
