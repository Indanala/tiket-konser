<div class="container mt-3">
    <div class="row">
        <div class="col-12">

            <div class="pt-4 d-flex justify-content-between align-items-center">
                <h2>Info Tiket {{$request->nama}}</h2>
            </div>
            <hr>

            <ul>
                <li>Id               : {{$request->id}}</li>
                <li>Nama             : {{$request->nama}}</li>
                <li>Jenis Kelamin   : {{$request->jenis_kelamin}}</li>
                <li>Tanggal Daftar   :{{$request->created_at}}</li>
            </ul>
        </div>
         <h4> Silahkan ScreenShot Nomor ID untuk dibawa sesuai Jadwal Konser </h4>
        <div>
            <a href="{{url('/daftar-tiket')}}" type="button" class="btn btn-danger my-2">Kembali</a>
        </div>
    </div>
</div>
