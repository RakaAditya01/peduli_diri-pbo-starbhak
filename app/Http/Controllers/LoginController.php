<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(){
        return view('login');
    }

    public function loginproses(Request $request)
    {
        if(Auth::attempt($request->only('nik','nama_lengkap'))){
            return redirect('/');
        }
        return redirect('login');
    }


    public function register(){
        return view('login.register');
    }

    public function registeruser(Request $request){
        // dd($request->all());
        user::create([
            'nik' => $request->nik,
            'nama_lengkap' => $request->nama_lengkap,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);
        return redirect('/login');
    }
}
