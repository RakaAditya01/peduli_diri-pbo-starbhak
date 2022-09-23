@extends('layout.main')

@section('content')
<div class="container">
  <h1 class="text-center mb-4 pt-4">Profile</h1>
  <div class="row justify-content-center">
      <div class="col-8">
          <div class="card">
              <div class="card-body" style="width: 90%">
                  <form  method="POST" action="{{Route('loginproses')}}">
                      @csrf
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                          <input type="text" name="name"  class="form-control" id=""
                              aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text"></div>
                      </div>

                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">email</label>
                          <input type="text" name="email"  class="form-control" id=""
                              aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text"></div>
                      </div>                    
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">role</label>
                          <input type="text" name="password"  class="form-control" id=""
                              aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text"></div>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                  {{-- @foreach ($data as $index => $row)
                  <th scope="row">{{ $index + $data->firstItem() }}</th>
                  <td>{{$row -> name}}</td>
                  <td>{{$row -> email}}</td>
                  <td>{{$row -> password}}</td>
                  <td class="d-flex">
                    @endforeach --}}
              </div>
          </div>
      </div>
  </div>
</div>
@endsection