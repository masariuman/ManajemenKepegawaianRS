<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    //
    protected $table = 'ruangan';
    protected $fillable = [
        'ruangan',
        'created_at',
        'updated_at'
    ];

    public function pegawai()
    {
        return $this->hasMany('App\Pegawai', 'ruangan_id',);
}
