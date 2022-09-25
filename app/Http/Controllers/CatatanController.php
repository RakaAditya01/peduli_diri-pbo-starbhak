<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catatan;

class CatatanController extends Controller
{
    public function index(){
        $data = catatan::paginate(5);
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
            'dokumentasi',
        ]);
        catatan::create($request->all());
        // if($request->hasFile('dokumentasi')){
        //     $request->file('dokumentasi')->move('fotodokumentasi/', $request->file('dokumentasi')->getClientOriginalName());
        //     $data->dokumentasi = $request->file('dokumentasi')->getClientOriginalName();
        //     $data->save();
        // }
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
