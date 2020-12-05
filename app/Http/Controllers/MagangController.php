<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Magang;

class MagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Magang::all();
        return view('magang.magang', ['magang' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('magang.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Magang();

        $data->nama = $request->post('nama');
        $data->alamat = $request->post('alamat');
        $data->jk = $request->post('jk');
        $data->email = $request->post('email');
        $data->foto = $request->post('foto');
        $data->no_tlp = $request->post('no_tlp');
        $data->asal_sklh = $request->post('asal_sklh');

        $data->save();

        return redirect()->route('magang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $data = Magang::find ($id);
        $get_mgn = Magang::find($id);
        $data->nama = $request->post('nama');
        $data->alamat = $request->post('alamat');
        $data->jk = $request->post('jk');
        $data->email = $request->post('email');
        $data->foto = $request->post('foto');
        $data->no_tlp = $request->post('no_tlp');
        $data->asal_sklh = $request->post('asal_sklh');
        return view('magang.detail',compact('get_mgn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $get_mgn = Magang::find($id_magang);
        $get_mgn = Magang::find($id);
        return view('magang.edit',compact('get_mgn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Magang::find ($id);
        $data->nama = $request->post('nama');
        $data->alamat = $request->post('alamat');
        $data->jk = $request->post('jk');
        $data->email = $request->post('email');
        $data->foto = $request->post('foto');
        $data->no_tlp = $request->post('no_tlp');
        $data->asal_sklh = $request->post('asal_sklh');
        $data->save();
        return redirect()->route('magang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Magang::findOrFail($id);
        $data->delete();
        return redirect()->route('magang.index');
    }
}
