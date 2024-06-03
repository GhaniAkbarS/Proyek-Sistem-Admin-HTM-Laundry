<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Data Harga </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('harga.update', $data->id_harga) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- Tambahkan metode PUT untuk operasi update -->

                            <div class="form-group">
                                <label class="font-weight-bold">JENIS PAKET</label>
                                <input type="text" class="form-control @error('jenis') is-invalid @enderror"
                                    name="jenis" value="{{ $data->jenis }}" placeholder="Masukkan Jenis Paket">
                                @error('jenis')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">HARGA/kg</label>
                                <input type="text" class="form-control @error('harga_perkilo') is-invalid @enderror"
                                    name="harga_perkilo" value="{{ $data->harga_perkilo }}" placeholder="Masukkan Harga Per Kilo">
                                @error('harga_perkilo')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
