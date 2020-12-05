<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tb_user;
use App\Magang;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tb_user::all();
        return view ('user.user', ['user'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $set_magang = Magang::get();
        return view('user.tambah',compact('set_magang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Tb_user();

        $data->username = $request->post('username');
        $data->password = Hash::make($request->post('passwoard'));
        $data->id = $request->post('id');
        $data->level = $request->post('level');

        $data->save();

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id_user)
    {
        $get_usr = Tb_user::where('id_user',$id_user)->first();
        $set_magang = Magang::get();
        $data = Tb_user::where('id_user',$id_user)->first();
        $data->username = $request->post('username');
        $data->password = Hash::make($request->post('password'));
        $data->id = $request->post('id');
        $data->level = $request->post('level');
        return view('user.detail',compact('get_usr','set_magang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_user)
    {
        $get_usr = Tb_user::where('id_user',$id_user)->first();
        $set_magang = Magang::get();

        return view('user.edit',compact('get_usr','set_magang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_user)
    {

        $data = Tb_user::where ('id_user',$id_user)->first();
        $data->username = $request->post('username');
        $data->password = Hash::make($request->post('password'));
        $data->id = $request->post('id');
        $data->level = $request->post('level');
        $data->save();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_user)
    {
        $data = Tb_user::findOrFail($id_user);
        $data->delete();
        return redirect()->route('user.index');
    }
}
