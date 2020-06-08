<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormSkp extends Model
{
    //
    protected $table = 'form_skp';
    protected $fillable = [
        'skp_id',
        'kegiatan_tugas_jabatan_1',
        'kegiatan_tugas_jabatan_2',
        'ak',
        'kuant_output_1',
        'kuant_output_2',
        'kual_mutu',
        'biaya',
        'active',
        'created_at',
        'updated_at'
    ];

    public function skp()
    {
        return $this->belongsTo('App\Skp', 'skp_id');
    }
}
