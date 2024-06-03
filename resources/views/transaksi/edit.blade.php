<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HALAMAN TRANSAKSI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('transaksi.update', $data->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                      
                            <div class="form-group">
                                <label class="font-weight-bold">ID PELANGGAN</label>

                                <input type="text" class="form-control @error('no_pelanggan_transaksi') is-invalid @enderror" 
                                name="no_pelanggan_transaksi" value="{{ $data->no_pelanggan_transaksi }}">
                                <!-- error message untuk no_pelanggan_transaksi-->

                                @error('no_pelanggan_transaksi')
                                <div class="alert alert-danger mt-2">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            
                            <div class="form-group">
                                <label class="font-weight-bold">BERAT/kg</label>

                                <input type="text" class="form-control @error('berat_transaksi') is-invalid @enderror" 
                                name="berat_transaksi" value="{{ $data->berat_transaksi }}">
                                <!-- error message untuk berat_transaksi-->

                                @error('berat_transaksi')
                                <div class="alert alert-danger mt-2">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

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
                                <label class="font-weight-bold">TOTAL</label>

                                <input type="text" class="form-control @error('harga_transaksi') is-invalid @enderror" 
                                name="harga_transaksi" value="{{ $data->harga_transaksi }}">
                                <!-- error message untuk harga_transaksi-->

                                @error('harga_transaksi')
                                <div class="alert alert-danger mt-2">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TANGGAL MASUK</label>

                                <input type="dateTime-Local" class="form-control @error('tgl_transaksi_masuk') is-invalid @enderror"
                                    name="tgl_transaksi_masuk" value="{{ $data->tgl_transaksi_masuk }}">
                                <!-- error message untuk tgl_transaksi_masuk -->
                                @error('tgl_transaksi_masuk')
                                <div class="alert alert-danger mt-2">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TANGGAL SELESAI</label>

                                <input type="dateTime-Local" class="form-control @error('tgl_transaksi_selesai') is-invalid @enderror"
                                    name="tgl_transaksi_selesai" value="{{ $data->tgl_transaksi_selesai }}">
                                <!-- error message untuk tgl_transaksi_selesai -->
                                @error('tgl_transaksi_selesai')
                                <div class="alert alert-danger mt-2">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">STATUS TRANSAKSI</label>

                                <input type="text" class="form-control @error('status_transaksi') is-invalid @enderror" 
                                name="status_transaksi" value="{{ $data->status_transaksi }}">
                                <!-- error message untuk status_transaksi-->

                                @error('status_transaksi')
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
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
 CKEDITOR.replace('description');
    </script>
</script>
</body>
</html>