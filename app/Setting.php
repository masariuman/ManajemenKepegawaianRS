<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    protected $table = 'setting';
    protected $fillable = [
        'tahun',
        'created_at',
        'updated_at'
    ];
}
