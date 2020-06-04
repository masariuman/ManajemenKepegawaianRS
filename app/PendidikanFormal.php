<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendidikanFormal extends Model
{
    //
    protected $table = '';
    protected $fillable = [

        'created_at',
        'updated_at'
    ];

    public function pegawai()
    {
        return $this->belongsTo('App\Pegawai', 'pegawai_id',);
}
