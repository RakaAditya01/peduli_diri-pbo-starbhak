<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datadiri;



class DatadiriController extends Controller
{
    public function index(){
        $data = datadiri::all();
        return view('datadiri\datadiri',compact('data'));
    }
    public function tambahdata(){

        return view('datadiri\datatambah');
    }
    public function store(request $request){
        $this-> validate($request, [
            'nik',
            'nama_lengkap',
            'alamat',
            'tempat_lahir',
        ]);
        datadiri::create($request->all());
        return redirect(route('datadiri'));
        }
    
    

    public function tampilandata($id){
        $data = datadiri::find ($id);
    return view('datadiri\edit',compact('data'));
   }
   public function update(request $request, $id){

    $data = datadiri::find($id);
    $data->update($request->all());
    return redirect()->route('datadiri');
}   
    public function destroy($id){
    $data = datadiri::find($id);
    $data->delete();
    return redirect()->route('datadiri');
}

}
