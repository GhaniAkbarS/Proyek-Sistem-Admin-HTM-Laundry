<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pakaian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('pakaian.store') }}" method="post">
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
                                <label class="font-weight-bold">JENIS PAKAIAN</label>
                                <input type="text" class="form-control @error('jenis_pakaian') is-invalid @enderror"
                                    name="jenis_pakaian" placeholder="Jenis Pakaian">
                                @error('jenis_pakaian')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">JUMLAH PAKAIAN</label>
                                <input type="text" class="form-control @error('jumlah_pakaian') is-invalid @enderror"
                                    name="jumlah_pakaian" placeholder="Jumlah Pakaian">
                                @error('jumlah_pakaian')
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
