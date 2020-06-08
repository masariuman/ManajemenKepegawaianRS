<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skp extends Model
{
    //
    protected $table = 'skp';
    protected $fillable = [
        'tahun',
        'kategori',
        'pegawai_id',
        'nama_pejabat_penilai',
        'nip_pejabat_penilai',
        'pangkat_golongan_ruang_penilai',
        'jabatan_penilai',
        'unit_kerja_penilai',
        'nama_atasan_pejabat_penilai',
        'nip_atasan_pejabat_penilai',
        'pangkat_golongan_ruang_atasan_penilai',
        'jabatan_atasan_penilai',
        'unit_kerja_atasan_penilai',
        'active',
        'created_at',
        'updated_at'
    ];

    public function pegawai()
    {
        return $this->belongsTo('App\Pegawai', 'pegawai_id');
    }

    public function formSkp()
    {
        return $this->hasMany('App\FormSkp', 'skp_id');
    }

    public function penilaianSkp()
    {
        return $this->hasMany('App\PenilaianSkp', 'skp_id');
    }

    public function pengukuranSkp()
    {
        return $this->hasMany('App\PengukuranSkp', 'skp_id');
    }

    public function perilakuKerjaSkp()
    {
        return $this->hasMany('App\PerilakuKerjaSkp', 'skp_id');
    }
}
