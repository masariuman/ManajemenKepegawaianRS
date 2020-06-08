<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JabatanTeknis extends Model
{
    //
    protected $table = 'jabatan_teknis';
    protected $fillable = [
        'tahun',
        'pegawai_id',
        'nama_jabatan',
        'tmt_jabatan',
        'tahun_mulai',
        'tahun_selesai',
        'nomor_sk',
        'tanggal_sk',
        'nip_penjabat_penandatangan_sk',
        'nip_lama_penjabat_penandatangan_sk',
        'active',
        'created_at',
        'updated_at'
    ];

    public function pegawai()
    {
        return $this->belongsTo('App\Pegawai', 'pegawai_id');
    }
}
