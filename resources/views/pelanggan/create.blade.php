<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> HALAMAN PELANGGAN </title>
        <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">
<div class="container mt-5 mb-5">
<div class="row">
<div class="col-md-12">
<div class="card border-0 shadow rounded">
<div class="card-body">
<form action="{{ route('pelanggan.store') }}"

method="post" enctype="multipart/form-data">


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header text-center">
                <label class="font-weight-bold">HALAMAN PELANGGAN</label>
                </div>
                        <div class="card-body">
                        <form action="{{ route('pelanggan.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">ID PELANGGAN</label>
                                <input type="text" class="form-control @error('id_pelanggan') is-invalid @enderror"
                                    name="id_pelanggan" placeholder="Id Pelanggan">
                                @error('id_pelanggan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">NAMA PELANGGAN</label>
                                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NO TELP PELANGGAN</label>
                                <input type="text" class="form-control" id="telp_pelanggan" name="telp_pelanggan" required>
                            </div>

                            <div class="form-group">
                            <label class="font-weight-bold">ALAMAT PELANGGAN</label>

                            <textarea class="form-control @error('alamat_pelanggan') is-invalid @enderror" name="alamat_pelanggan" rows="5" placeholder="Masukkan Konten pelanggan">{{ old('alamat_pelanggan') }}</textarea>
                            <!-- error message untuk alamat_pelanggan-->
                            @error('alamat_pelanggan')
                            <div class="alert alert-danger mt-2">
                            {{ $message }}
                            </div>
                            @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">SIMPAN</button>
                            <button type="submit" class="btn btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
              
    </body>
</html>