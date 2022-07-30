@extends('layout.main')

@section('content')
    <h1>Data Diri Anda</h1>
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">NIK</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Alamat</th>
        <th scope="col">Tempat,tanggal lahir</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>Thornton</td>
        <td>@twitter</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
@endsection
