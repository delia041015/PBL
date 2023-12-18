

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGULASI PKL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>
<body style="background-color: #f8f9fa;">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="bg-white p-4 rounded shadow">
                <h4 class="text-center text-primary mb-4">Edit Data Mahasiswa</h4>
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{ route('update-mahasiswa', ['id_mhs' => $data->id_mhs]) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="id_mhs" class="form-label">Id_Mahasiswa <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="id_mhs" id="id_mhs disabled" value="{{$data->id_mhs}}">
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="nim" id="nim" value="{{$data->nim}}">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="nama" id="nama" value="{{$data->nama}}">
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="kelas" id="kelas" value="{{$data->kelas}}">
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No.HP <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="no_hp" id="no_hp" value="{{$data->no_hp}}">
                    </div>
                    <br>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                        <a href="/mahasiswa-adm" class="btn btn-success">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
