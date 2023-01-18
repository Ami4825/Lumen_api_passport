<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tbl_dosen extends Model
{
    protected $table = "tbl_dosen";
    protected $casts = [
        'no_hp' => 'float',
    ];

    public $timestamps = false;

    public function tbl_matkuls()
    {
        return $this->hasMany('App\Models\Tbl_matkul', 'nip', 'kode_matkul');
    }
}
