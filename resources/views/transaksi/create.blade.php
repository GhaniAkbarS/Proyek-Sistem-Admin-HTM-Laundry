<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> HALAMAN TRANSAKSI </title>
        <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">
<div class="container mt-5 mb-5">
<div class="row">
<div class="col-md-12">
<div class="card border-0 shadow rounded">
<div class="card-body">
<form action="{{ route('transaksi.store') }}"

method="post" enctype="multipart/form-data">


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header text-center">
                <label class="font-weight-bold">HALAMAN TRANSAKSI</label>
                </div>
                        <div class="card-body">
                        <form action="{{ route('transaksi.store') }}" method="POST">
                            @csrf
                  
                            <div class="form-group">
                                <label class="font-weight-bold">ID PELANGGAN</label>
                                <input type="text" class="form-control" id="no_pelanggan_transaksi" name="no_pelanggan_transaksi" required>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">BERAT/kg</label>
                                <input type="text" class="form-control" id="berat_transaksi" name="berat_transaksi" required>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">JENIS PAKET</label>
                                <input type="text" class="form-control @error('jenis') is-invalid @enderror"
                                    name="jenis" placeholder="Masukkan Jenis Paket">
                                @error('jenis')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">TOTAL</label>
                                <input type="text" class="form-control" id="harga_transaksi" name="harga_transaksi" required>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TANGGAL MASUK</label>
                                <input type="dateTime-Local" class="form-control" id="tgl_transaksi_masuk" name="tgl_transaksi_masuk" required>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TANGGAL SELESAI</label>
                                <input type="dateTime-Local" class="form-control" id="tgl_transaksi_selesai" name="tgl_transaksi_selesai" required>
                            </div>
                           
                            <div class="form-group">
                                <label class="font-weight-bold">STATUS TRANSAKSI</label>
                                <input type="text" class="form-control" id="status_transaksi" name="status_transaksi" required>
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