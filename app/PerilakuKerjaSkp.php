<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerilakuKerjaSkp extends Model
{
    //
    protected $table = 'perilaku_kerja_skp';
    protected $fillable = [
        'tahun',
        'kategori',
        'pegawai_id',
        'orientasi_pelayanan',
        'integritas',
        'komitmen',
        'disiplin',
        'kerjasama',
        'kepemimpinan',
        'jumlah',
        'rata-rata',
        'active',
        'created_at',
        'updated_at'
    ];

    public function pegawai()
    {
        return $this->belongsTo('App\Pegawai', 'pegawai_id');
    }
}
