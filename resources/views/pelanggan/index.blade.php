<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HALAMAN PELANGGAN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('pelanggan.create') }}" class="btn btn-md btn-success mb-3">TAMBAH PELANGGAN</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col" class="font-weight-bold text-center">ID PELANGGAN</th>
                                <th scope="col" class="text-center font-weight-bold">NAMA PELANGGAN</th>
                                <th scope="col" class="text-center font-weight-bold">NO TELP PELANGGAN</th>
                                <th scope="col" class="text-center font-weight-bold">ALAMAT PELANGGAN</th>
                                <th scope="col" class="text-center font-weight-bold">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $pelanggan)
                                <tr>
                                <td style="text-align: center;">{{ $pelanggan->id_pelanggan }}</td>
                                <td style="text-align: center;">{{ $pelanggan->nama_pelanggan }}</td>
                                <td style="text-align: center;">{{ $pelanggan->telp_pelanggan }}</td>
                                <td style="text-align: center;">{{ $pelanggan->alamat_pelanggan }}</td>

                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('pelanggan.destroy', $pelanggan->id) }}" method="post">
                                            <a href="{{ route('pelanggan.edit', $pelanggan->id) }}"
                                                class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center">
                                        <div class="alert alert-danger">
                                            Data pelanggan belum Tersedia.
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        //message with toastr
        @if(session()->has('success'))
        toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif(session()->has('error'))
        toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>
</body>

</html>
