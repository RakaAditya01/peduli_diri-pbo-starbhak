<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data;

class DatadiriController extends Controller
{
    public function index(){
        return view('data');
    }
}
