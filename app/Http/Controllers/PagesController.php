<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
// use App\Tb_user;
use Auth;

use function PHPUnit\Framework\returnSelf;

class PagesController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login');
        }
        // return view ('master.login');
    }
    public function login(Request $request)
    {
       $username = $request->username;
       $password = $request->password;

       $data = Tb_user:: where('username',$username)->first();

       if($data){
           if($password==$data->password){
               Session::put('username',$data->username);
               Session::put('login',TRUE);
               return redirect('dashboard');
           }else{
                return redirect('/')->with('alert','Password, Salah !');
            }
       }
       else{
        return redirect('/')->with('alert','Password, Salah!');
       }
    }

    public function home(){
        return view ('index');
    }
    public function logout(\Illuminate\Http\Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return view('index');
    }
}
