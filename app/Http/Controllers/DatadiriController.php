<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datadiri;



class DatadiriController extends Controller
{
    public function index(){
        $data = datadiri::paginate(5);
        return view('datadiri\datadiri',compact('data'));
    }
    public function tambahdata(){

        return view('datadiri\datatambah');
    }
    public function store(request $request){
        $this-> validate($request, [
            'nama_lengkap',
            'nik',
            'alamat',
            'jenis_kelamin',
            'no_ponsel',
            'tempat_lahir',
            'email',
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
