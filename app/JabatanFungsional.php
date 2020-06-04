<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JabatanFungsional extends Model
{
    //
    protected $table = 'jabatan_fungsional';
    protected $fillable = [
        'tahun',
        'pegawai_id',
        'eselon',
        'nama_jabatan',
        'tmt_jabatan',
        'nomor_sk',
        'tanggal_sk',
        'penjabat_penandatangan_sk',
        'created_at',
        'updated_at'
    ];

    public function pegawai()
    {
        return $this->belongsTo('App\Pegawai', 'pegawai_id');
    }
}
