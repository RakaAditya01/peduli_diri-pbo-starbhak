
@extends('layout.main')


@section('content')
<div class="container">
    <h1 class="text-center mb-4 pt-4">Edit Catatan</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body" style="width: 90%">
                    <form  method="POST" action="/updatecatatan/{{$data->id}}">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                            <input type="text" name="tanggal" value="{{$data->tanggal}}" class="form-control" id=""
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Waktu</label>
                            <input type="text" name="waktu" value="{{$data->waktu}}" class="form-control" id=""
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                         
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Lokasi</label>
                            <input type="text" name="lokasi" value="{{$data->lokasi}}" class="form-control" id=""
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Suhu Tubuh</label>
                            <input type="text" name="suhu_tubuh" value="{{$data->suhu_tubuh}}" class="form-control" id=""
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
