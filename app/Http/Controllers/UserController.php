<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
        $data = User::all();
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
        $data = new User();

        $data->username = $request->post('username');
        $data->password = Hash::make($request->post('passwoard'));
        $data->magang_id = $request->post('magang_id');
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
    public function show($id)
    {
        $get_usr = User::findOrFail($id);
        $set_magang = Magang::get();
        return view('user.detail',compact('get_usr','set_magang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $get_usr = User::findOrFail($id);
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
    public function update(Request $request, $id)
    {

        $data = User::findOrFail($id);
        $data->username = $request->post('username');
        $data->password = Hash::make($request->post('password'));
        $data->magang_id = $request->post('magang_id');
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
    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return redirect()->route('user.index');
    }
}
