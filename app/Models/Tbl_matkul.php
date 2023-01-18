<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tbl_matkul extends Model
{
    protected $fillable = array('kode_matkul', 'nama_matkul', 'sks', 'semester', 'nip');
    protected $casts = [
        'sks' => 'float',
    ];
    public $timestamps = false;
    //
    public function tbl_dosen()
    {
        return $this->belongsTo('App\Models\Tbl_dosen', 'nip', 'nip');
    }

    public function tbl_nilai()
    {
        return $this->hasMany('App\Models\Tbl_nilai', 'kode_matkul', 'id');
    }
}
