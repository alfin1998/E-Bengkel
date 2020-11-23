<?php

namespace App\Http\Controllers;

use App\Models\Bengkel as bengkel;
use Illuminate\Http\Request;

class BengkelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        bengkel::all();
    }

    public function tambahBengkel(Request $request){
        $data= new bengkel();        
        $data->nama=$request->input('nama');
        $data->alamat=$request->input('alamat');
        $data->no_hp=$request->input('no_hp');
        $data->keterangan=$request->input('keterangan');
        $data->created_who=$request->input('created_who');
        $data->update_who=$request->input('update_who');
        $data->id_pemilik=$request->input('id_pemilik');
        $data->id_lokasi=$request->input('id_lokasi');
        $data->id_penilaian=$request->input('id_penilaian');
        $data->save();
        return 'berhasil';

    }

    public function editBengkel(Request $request, $id){
        // $nama=$request->input('nama');
        // $alamat=$request->input('alamat');
        // $no_hp=$request->input('no_hp');
        // $keterangan=$request->input('keterangan');
        // $created_who=$request->input('created_who');
        // $update_who=$request->input('update_who');
        // $id_pemilik=$request->input('id_pemilik');
        // $id_lokasi=$request->input('id_lokasi');
        // $id_penilaian=$request->input('id_penilaian');
        
        $data=bengkel::find($id);
        $data->nama=$request->input('nama');
        $data->alamat=$request->input('alamat');
        $data->no_hp=$request->input('no_hp');
        $data->keterangan=$request->input('keterangan');
        $data->created_who=$request->input('created_who');
        $data->update_who=$request->input('update_who');
        $data->id_pemilik=$request->input('id_pemilik');
        $data->id_lokasi=$request->input('id_lokasi');
        $data->id_penilaian=$request->input('id_penilaian');
        $data->save();
        return 'berhasil edit';
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
     * @param  \App\Models\Bengkel  $bengkel
     * @return \Illuminate\Http\Response
     */
    public function show(Bengkel $bengkel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bengkel  $bengkel
     * @return \Illuminate\Http\Response
     */
    public function edit(Bengkel $bengkel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bengkel  $bengkel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bengkel $bengkel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bengkel  $bengkel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bengkel $bengkel)
    {
        //
    }
}
