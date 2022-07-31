@extends('layout.main')

@section('content')
    <h1>Catatan Perjalanan</h1>
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Waktu</th>
        <th scope="col">Lokasi</th>
        <th scope="col">Suhu Tubuh</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>20-6-22</td>
        <td>13:25</td>
        <td>Jl.Sudirman</td>
        <td>32</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>21-9-22</td>
        <td>09:00</td>
        <td>Jl.Simpang Depok</td>
        <td>38</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>09-7-22</td>
        <td>20:45</td>
        <td>Jl.Dongkal</td>
        <td>34</td>
      </tr>
    </tbody>
  </table>
@endsection
