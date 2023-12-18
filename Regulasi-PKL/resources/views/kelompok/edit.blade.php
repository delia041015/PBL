

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
                <h4 class="text-center text-primary mb-4">Edit Data Kelompok</h4>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('update-kelompok', $data->id_kelompok) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="id_kelompok" class="form-label">Id_kelompok <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="id_kelompok" id="id_kelompok" value="{{$data->id_kelompok}}">
                    </div>
                    <div class="mb-3">
                        <label for="nama_kelompok" class="form-label">Nama kelompok <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="nama_kelompok" id="nama_kelompok" value="{{$data->nama_kelompok}}">
                    </div>
                    <div class="mb-3">
                        <label for="ketua" class="form-label">Ketua <span class="text-danger">*</span></label>
                        <select class="form-control" name="ketua" id="ketua">
                            <option value="{{ $data->ketua_id }}">{{ $data->ketua->nama }}</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id_mhs }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                <label for="anggota1">Anggota 1<span class="text-danger">*</span></label>
                <select class="form-control" name="anggota1" id="anggota1">
                    <option value="{{ $data->anggota1_id }}">{{ $data->anggota1->nama }}</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id_mhs }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="anggota2">Anggota 2<span class="text-danger">*</span></label>
                <select class="form-control" name="anggota2" id="anggota2">
                    <option value="{{ $data->anggota2_id }}">{{ $data->anggota2->nama }}</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id_mhs }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="instansi">Instansi<span class="text-danger">*</span></label>
                <select class="form-control" name="instansi" id="instansi">
                    <option value="{{ $data->instansi_id }}">{{ $data->instansi->nama }}</option>
                    @foreach ($ins as $item)
                        <option value="{{ $item->id_instansi }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="dosen">Dosen<span class="text-danger">*</span></label>
                <select class="form-control" name="dosen" id="dosen">
                    <option value="{{ $data->dosen_id }}">{{ $data->dosen->nama }}</option>
                    @foreach ($dosen as $item)
                        <option value="{{ $item->id_dosen }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                        <a href="{{url('kelompok-adm')}}" class="btn btn-success">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
