<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    //
    protected $table = 'organisasi';
    protected $fillable = [
        'tahun',
        'pegawai_id',
        'tahun_organisasi',
        'nama_organisasi',
        'kedudukan',
        'tanggal_mulau',
        'tanggal_selesai',
        'nomor_sk',
        'jabatan_pembuat_sk',
        'created_at',
        'updated_at'
    ];

    public function pegawai()
    {
        return $this->belongsTo('App\Pegawai', 'pegawai_id',);
}
