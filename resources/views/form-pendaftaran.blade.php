<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Registrasi</title>
</head>
<body>
    <div class="container pt-4 bg-white">
        <div class="row">
         <div class="col-md-8 col-xl-6">
            <h1>Pembelian Tiket Konser</h1>
         <hr>
         <form action="{{url('/proses-form')}}" method="GET">
            <div class="mb-3">
                 <label class="form-label" for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="mb-3">
                <label for="" class="form-label"> Jenis Kelamin</label>
                <div class="d-flex">
                    <div class="form-check me-3">
                         <input class="form-check-input" type="radio" name="jenis_kelamin"
                         id="laki_laki" value="L">
                        <label class="form-check-label" for="laki_laki">Laki-laki</label>
                     </div>
                     <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin"
                            id="perempuan" value="P">
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                     </div>
                </div>
            </div>
                <button type="submit" class="btn btn-primary mb-2">Pesan</button>
         </form>
</body>
</html>
