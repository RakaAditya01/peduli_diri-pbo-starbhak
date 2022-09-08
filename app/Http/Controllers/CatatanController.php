<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catatan;

class CatatanController extends Controller
{
    public function index(){
        $data = catatan::all();
        return view('catatan\catatan',compact('data'));
    }
    public function tambahcatatan(){

        return view('catatan\tambahcatatan');
    }
    public function store(request $request){
        $this-> validate($request, [
            'tanggal',
            'waktu',
            'lokasi',
            'suhu_tubuh',
        ]);
        catatan::create($request->all());
        return redirect(route('catatan'));
        }
    
    

    public function tampilancatatan($id){
        $data = catatan::find ($id);
    return view('catatan\editcatatan',compact('data'));
   }
   public function update(request $request, $id){

    $data = catatan::find($id);
    $data->update($request->all());
    return redirect()->route('catatan');
}   
    public function destroy($id){
    $data = catatan::find($id);
    $data->delete();
    return redirect()->route('catatan');
}

}
