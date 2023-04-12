<div class="container mt-3">
    <div class="row">
        <div class="col-12">

            <div class="pt-4 d-flex justify-content-between align-items-center">
                <h2>Info Tiket {{$tiket->nama}}</h2>
            </div>
            <hr>

            @csrf
            @if (session()->has('pesan'))
            <div class="alert alert-success" role="alert">{{session('pesan')}}</div>
            @endif

            <ul>
                <li>Id               : {{$tiket->id}}</li>
                <li>Nama             : {{$tiket->nama}}</li>
                <li>Jenis Kelamin   : {{$tiket->jenis_kelamin}}</li>
                <li>Tanggal Daftar   :{{$tiket->created_at}}</li>
            </ul>
        </div>
        <div>
            <a href="{{url('/checkin')}}" type="button" class="btn btn-danger my-2">Kembali</a>
        </div>
    </div>
</div>
