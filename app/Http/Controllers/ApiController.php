<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbl_matkul;

class ApiController extends Controller
{
    public function getDataBymatkul()
    {
        // $users = User::orderBy('created_at', 'DESC')->get();
        // $users = User::with(['product'])->orderBy('created_at', 'DESC')->get();

        $matkul = Tbl_matkul::with(['dosen'])->get();
        return response()->json(['data' => $matkul]);
    }
}
