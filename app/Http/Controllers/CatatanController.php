<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catatan;

class CatatanController extends Controller
{
    public function index(){
        return view('catatan');
    }
}
