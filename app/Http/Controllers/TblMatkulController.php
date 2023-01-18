<?php

namespace App\Http\Controllers;

use App\Models\Tbl_matkul;
use Illuminate\Http\Request;

class TblMatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Tbl_matkul::all();
        // return response()->json($data);

        $matkul = Tbl_matkul::with(['Tbl_dosen:nip,nama_dosen,no_hp'])->get();
        return response()->json(['data' => $matkul]);
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
     * @param  \App\Models\Tbl_matkul  $tbl_matkul
     * @return \Illuminate\Http\Response
     */
    public function show(Tbl_matkul $tbl_matkul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tbl_matkul  $tbl_matkul
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbl_matkul $tbl_matkul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tbl_matkul  $tbl_matkul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbl_matkul $tbl_matkul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tbl_matkul  $tbl_matkul
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tbl_matkul $tbl_matkul)
    {
        //
    }
}
