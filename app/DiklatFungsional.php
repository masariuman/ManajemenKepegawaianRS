<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiklatFungsional extends Model
{
    //
    protected $table = 'anak';
    protected $fillable = [
        'tahun',
        'pegawai_id',
        'nama_diklat',
        'tempat_belajar',
        'lokasi',
        'tanggal_mulai',
        'tanggal_selesai',
        'jumlah_jam',
        'penyelenggara',
        'created_at',
        'updated_at'
    ];

    public function pegawai()
    {
        return $this->belongsTo('App\Pegawai', 'pegawai_id',);
    }
}
