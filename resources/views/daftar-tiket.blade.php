<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <title>Sistem Informasi Tiket Konser</title>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
    data-bs-target="#navbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-md-flex justify-content-between
    align-items-center" id="navbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{url('/daftar-tiket')}}">
            Daftar Tiket
        </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/check-in')}}">
           Check-in
        </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/laporan')}}">
            Detail Laporan
        </a>
        </li>
      </ul>
      <ul class="navbar-nav mt-2 mt-md-0">
        <li class="nav-item">
          <span class="text-light">Hello, {{ session('username')}} </span>
          <a class="nav-link d-inline" href="{{url('/logout')}}">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="py-4 d-flex justify-content-between align-items-center">
                <h1 class="h2">Tabel Penjualan Tiket Konser</h1>
            </div>

            <table class="table table-striped">
                <thead>
                    <th>#</th>
                    <th>Nama </th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Pembuatan</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @forelse ($tikets as $tiket )
                        <tr>
                            <th> {{$tiket ->id}}</th>
                            <td>{{$tiket->nama}}</td>
                            <td>{{$tiket->jenis_kelamin}}</td>
                            <td>{{$tiket->created_at}}</td>
                            <td> <button type="submit" class="btn btn-primary my-2">Edit</button>
                                <button type="submit" class="btn btn-danger my-2">Delete</button>
                            </td>
                        </tr>
                    @empty
                    <td colspan="6" class="text-center">Tidak ada data...</td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
