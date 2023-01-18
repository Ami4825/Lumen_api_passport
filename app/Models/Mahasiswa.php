<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";

    public function tbl_nilai()
    {
        return $this->hasMany('App\Models\Tbl_nilai', 'nim', 'id');
    }
}
