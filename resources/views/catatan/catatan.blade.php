@extends('layout.main')

@section('content')
<div class="container">
  <div class="card">
  <div class="card-body">
  <h1 class="mx-auto">Catatan Perjalanan</h1>
  <div class="row">
      <a href="{{route('tambahcatatan')}}" type="button" class="btn btn-success mt-2" >Tambah +</a>
      <table class="table mt-3">
          <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Waktu</th>
                  <th scope="col">Lokasi</th>
                  <th scope="col">Suhu Tubuh</th>
                  <th scope="col">Dokumentasi</th>
              </tr>
          </thead>
          <tbody>
            @php
            $no = 1;
              @endphp
              <tr>
                @foreach ($data as $index => $row)
                <th scope="row">{{ $index + $data->firstItem() }}</th>
                  <td>{{$row -> tanggal}}</td>
                  <td>{{$row -> waktu}}</td>
                  <td>{{$row -> lokasi}}</td>
                  <td>{{$row -> suhu_tubuh}}</td>
                  {{-- <td>
                    <img src="{{asset('fotodokumentasi/'.$row->catatan)}}" alt="" style="width: 100px">
                  </td> --}}
                  <td class="d-flex">
                    @if(auth()->user()->role == 'admin')
                      <form action="/deletecatatan/{{$row->id}}" method="POST">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-warning">Delete</button>
                      </form>
                     <a href="/tampilancatatan/{{$row->id}}" type="submit" class="btn btn-danger">Edit</a>
                     @endif
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
      {{ $data->links() }}
  </div>
  </div>
</div>
</div>
</div>
    </tbody>
  </table>
@endsection
