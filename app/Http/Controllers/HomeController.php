<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function Profile(){
    return view('profile/profile');
}
}


