<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tbl_nilai extends Model
{
    protected $fillable = array('id', 'kode_matkul', 'nim', 'nilai');

    public function mahasiswa()
    {
        return $this->belongsTo('App\Models\Mahasiswa', 'nim', 'nim');
    }

    public function tbl_matkul()
    {
        return $this->belongsTo('App\Models\Tbl_matkul', 'kode_matkul', 'kode_matkul');
    }
}
