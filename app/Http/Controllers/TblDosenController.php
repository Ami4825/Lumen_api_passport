<?php

namespace App\Http\Controllers;

use App\Models\Tbl_dosen;
use Illuminate\Http\Request;

class TblDosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tbl_dosen::all();
        return response()->json($data);
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
     * @param  \App\Models\Tbl_dosen  $tbl_dosen
     * @return \Illuminate\Http\Response
     */
    public function show(Tbl_dosen $tbl_dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tbl_dosen  $tbl_dosen
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbl_dosen $tbl_dosen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tbl_dosen  $tbl_dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbl_dosen $tbl_dosen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tbl_dosen  $tbl_dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tbl_dosen $tbl_dosen)
    {
        //
    }
}
