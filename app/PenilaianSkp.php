<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenilaianSkp extends Model
{
    //
    protected $table = 'penilaian_skp';
    protected $fillable = [
        'tahun',
        'kategori',
        'pegawai_id',
        'sasaran_kerja_pegawai',
        'orientasi_pelayanan',
        'integritas',
        'komitmen',
        'disiplin',
        'kerjasama',
        'kepemimpinan',
        'jumlah',
        'rata-rata',
        'nilai_perilaku_kerja',
        'jumlah_sasaran_kerja_pegawai',
        'jumlah_orientasi_pelayanan',
        'jumlah_integritas',
        'jumlah_komitmen',
        'jumlah_disiplin',
        'jumlah_kerjasama',
        'jumlah_kepemimpinan',
        'jumlah_jumlah',
        'jumlah_rata-rata',
        'jumlah_nilai_perilaku_kerja',
        'nilai_prestasi_kerja_1',
        'nilai_prestasi_kerja_2',
        'keberatan_pegawai',
        'tanggal_keberatan_pegawai',
        'tanggapan_pejabat',
        'tanggal_tanggapan_pejabat',
        'keputusan_atasan_pejabat',
        'tanggal_keputusan_atasan_pejabat',
        'rekomendasi',
        'dibuat_tanggal_pejabat_penilai',
        'diterima_tanggal_pegawai',
        'diterima_tanggal_atasan_pejabat_penilai',
        'active',
        'created_at',
        'updated_at'
    ];

    public function pegawai()
    {
        return $this->belongsTo('App\Pegawai', 'pegawai_id');
    }
}
