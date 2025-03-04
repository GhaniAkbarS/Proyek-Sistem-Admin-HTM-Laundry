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
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('pakaian.create') }}" class="btn btn-md btn-success mb-3">TAMBAH PAKAIAN</a>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                            <th scope="col" class="font-weight-bold text-center">ID PELANGGAN</th>
                            <th scope="col" class="font-weight-bold text-center">JENIS PAKAIAN</th>
                            <th scope="col" class="font-weight-bold text-center">JUMLAH PAKAIAN</th>
                            <th scope="col" class="font-weight-bold text-center">AKSI</th>
                            </tr>

                            </thead>
                            <tbody>
                                @forelse ($data as $pakaian)
                                <tr>
                                <td style="text-align: center;">{{ $pakaian->id_pelanggan }}</td>
                                <td style="text-align: center;">{{ $pakaian->jenis_pakaian }}</td>
                                <td style="text-align: center;">{{ $pakaian->jumlah_pakaian }}</td>

                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pakaian.destroy', $pakaian->id_pakaian) }}" method="post">
                                            <a href="{{ route('pakaian.edit', $pakaian->id_pakaian) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6">
                                        <div class="alert alert-danger">
                                            Data pakaian belum Tersedia.
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
</body>
</html>