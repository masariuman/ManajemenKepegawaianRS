<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerilakuKerjaSkp extends Model
{
    //
    protected $table = 'perilaku_kerja_skp';
    protected $fillable = [
        'skp_id',
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

    public function skp()
    {
        return $this->belongsTo('App\Skp', 'skp_id');
    }
}
