<?php

namespace App\Http\Controllers\Api;

use App\Models\Catatan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\CatatanResource;
use Illuminate\Support\Facades\Validator;

class catatanapicontroller extends Controller
{
    public function index()
    {
        //get Catatans
        $Catatans = Catatan::latest()->paginate(5);

        //return collection of posts as a resource
        return new CatatanResource(true, 'List Data Post', $Catatans);
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'tanggal'     => 'required',
            'waktu'     => 'required',
            'lokasi'   => 'required',
            'suhu_tubuh'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        // $image = $request->file('tanggal');
        // $image->storeAs('public/posts', $image->hashName());

        //create post
        $Catatans = Catatan::create([
            'tanggal'     => $request->tanggal,
            'waktu'     => $request->waktu,
            'lokasi'   => $request->lokasi,
            'suhu_tubuh'   => $request->suhu_tubuh,
        ]);

        //return response
        return new CatatanResource(true, 'Data Post Berhasil Ditambahkan!', $Catatans);
    }

    public function show(Catatan $Catatans)
    {
        //return single post as a resource
        return new CatatanResource(true, 'Data Post Ditemukan!', $Catatans);
    }

    public function update(Request $request, Catatan $Catatans)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'tanggal'     => 'required',
            'waktu'     => 'required',
            'lokasi'   => 'required',
            'suhu_tubuh'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //check if image is not empty
        // if ($request->hasFile('image')) {

        //     //upload image
        //     $image = $request->file('image');
        //     $image->storeAs('public/posts', $image->hashName());

        //     //delete old image
        //     Storage::delete('public/posts/'.$post->image);

        //     //update post with new image
        //     $post->update([
        //         'image'     => $image->hashName(),
        //         'title'     => $request->title,
        //         'content'   => $request->content,
        //     ]);

        // } else 
        {

            //update post without image
            $Catatans->update([
            'tanggal'     => $request->tanggal,
            'waktu'     => $request->waktu,
            'lokasi'   => $request->lokasi,
            'suhu_tubuh'   => $request->suhu_tubuh,
            ]);
        }

        //return response
        return new CatatanResource(true, 'Data Post Berhasil Diubah!', $Catatans);
    }

    public function destroy(Catatan $Catatans)
    {
        // //delete image
        // Storage::delete('public/posts/'.$post->image);

        //delete post
        $Catatans->delete();

        //return response
        return new CatatanResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
