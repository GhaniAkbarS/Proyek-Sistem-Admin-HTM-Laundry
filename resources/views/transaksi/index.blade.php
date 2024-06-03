<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HALAMAN TRANSAKSI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('transaksi.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA TRANSAKSI</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col" class="text-center font-weight-bold">ID PELANGGAN</th>
                                <th scope="col" class="text-center font-weight-bold">BERAT/kg</th>
                                <th scope="col" style="text-align: center; font-weight: bold;">JENIS PAKET</th>
                                <th scope="col" class="text-center font-weight-bold">TOTAL</th>
                                <th scope="col" class="text-center font-weight-bold">TANGGAL MASUK</th>
                                <th scope="col" class="text-center font-weight-bold">TANGGAL SELESAI</th>
                                <th scope="col" class="text-center font-weight-bold">STATUS TRANSAKSI</th>
                                <th scope="col" class="text-center font-weight-bold">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $transaksi)
                                <tr>
                                <td style="text-align: center;">{{ $transaksi->no_pelanggan_transaksi }}</td>
                                <td style="text-align: center;">{{ $transaksi->berat_transaksi }}</td>
                                <td style="text-align: center;">{{ $transaksi->jenis }}</td>
                                <td style="text-align: center;">{{ $transaksi->harga_transaksi }}</td>
                                <td style="text-align: center;">{{ $transaksi->tgl_transaksi_masuk }}</td>
                                <td style="text-align: center;">{{ $transaksi->tgl_transaksi_selesai }}</td>
                                <td style="text-align: center;">{{ $transaksi->status_transaksi }}</td>

                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('transaksi.destroy', $transaksi->id) }}" method="post">
                                            <a href="{{ route('transaksi.edit', $transaksi->id) }}"
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
                                            Data transaksi belum Tersedia.
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
