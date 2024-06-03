<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HALAMAN PELANGGAN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('pelanggan.update', $data->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="font-weight-bold">ID PELANGGAN</label>
                                <input type="text" class="form-control" name="id_pelanggan" value="{{ $data->id_pelanggan }}">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NAMA_PELANGGAN</label>

                                <input type="text" class="form-control @error('nama_pelanggan') is-invalid @enderror"
                                    name="nama_pelanggan" value="{{ $data->nama_pelanggan }}">
                                <!-- error message untuk nama_pelanggan -->
                                @error('nama_pelanggan')
                                <div class="alert alert-danger mt-2">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                            
                            <div class="form-group">
                                <label class="font-weight-bold">TELP_PELANGGAN</label>

                                <input type="text" class="form-control @error('telp_pelanggan') is-invalid @enderror" 
                                name="telp_pelanggan" value="{{ $data->telp_pelanggan }}">
                                <!-- error message untuk telp_pelanggan-->

                                @error('telp_pelanggan')
                                <div class="alert alert-danger mt-2">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                            <!-- ... -->
                            <div class="form-group">
                            <label class="font-weight-bold">ALAMAT PELANGGAN</label>
                            <textarea class="form-control @error('alamat_pelanggan') is-invalid @enderror" name="alamat_pelanggan" rows="5" placeholder="Masukkan Konten pelanggan">{{ $data->alamat_pelanggan }}</textarea>
                            <!-- error message untuk alamat_pelanggan-->
                            @error('alamat_pelanggan')
                            <div class="alert alert-danger mt-2">
                            {{ $message }}
                            </div>
                             @enderror
                            </div>
                            <!-- ... -->


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