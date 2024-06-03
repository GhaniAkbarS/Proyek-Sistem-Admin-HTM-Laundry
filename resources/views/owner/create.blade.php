<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> HALAMAN LOGIN </title>
        <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">
<div class="container mt-5 mb-5">
<div class="row">
<div class="col-md-12">
<div class="card border-0 shadow rounded">
<div class="card-body">
<form action="{{ route('owner.store') }}"

method="post" enctype="multipart/form-data">


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="font-weight-bold text-center">HALAMAN LOGIN</div>

                    <div class="card-body">
                        <form action="{{ route('owner.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                            <label for="username" class="font-weight-bold">USERNAME</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                            </div>

                            <div class="form-group">
                                <label for="password" class="font-weight-bold">PASSWORD</label>
                                <input type="text" class="form-control" id="password" name="password" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="submit" class="btn btn-warning">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
              
    </body>
</html>