<?php

namespace App\Http\Controllers;

use App\Models\Tbl_nilai;
use Illuminate\Http\Request;

class TblNilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Tbl_nilai::all();
        // return response()->json(['data' => $data]);

        $data = Tbl_nilai::with(['Tbl_matkul:kode_matkul,nama_matkul,sks', 'Mahasiswa:nim,nama'])->get();
        return response()->json(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tbl_nilai  $tbl_nilai
     * @return \Illuminate\Http\Response
     */
    public function show(Tbl_nilai $tbl_nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tbl_nilai  $tbl_nilai
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbl_nilai $tbl_nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tbl_nilai  $tbl_nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbl_nilai $tbl_nilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tbl_nilai  $tbl_nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tbl_nilai $tbl_nilai)
    {
        //
    }
}
