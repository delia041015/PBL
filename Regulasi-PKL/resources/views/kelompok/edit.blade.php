<head>
    <title>REGULASI PKL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>
<br>
<div class="container">
<div class="row">
    <div class="col-md-6">
        <h4>Edit Data kelompok</h4>
        <br>
        <form action="{{ route('update-kelompok', $data->id_kelompok) }}" method="POST">
            @csrf
            <div class="form-group">
            <label for="id_kelompok">Id_kelompok <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="id_kelompok" id="id_kelompok"
                value="{{$data->id_kelompok}}">
            </div>
            <div class="form-group">
                <label for="nama_kelompok">Nama kelompok<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_kelompok" id="nama_kelompok"
                value="{{$data->nama_kelompok}}">
            </div>
            <div class="form-group">
                <label for="ketua">Ketua<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="ketua" id="ketua"
                value="{{$data->ketua}}">
            </div>
            <div class="form-group">
                <label for="anggota1">Anggota 1<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="anggota1" id="anggota1"
                value="{{$data->anggota1}}">
            </div>
            <div class="form-group">
                <label for="anggota2">Anggota 2<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="anggota2" id="anggota2"
                value="{{$data->anggota2}}">
            </div>
            <div class="form-group">
                <label for="instansi">Instansi<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="instansi" id="instansi"
                value="{{$data->instansi}}">
            </div>
            <div class="form-group">
                <label for="dosen">Dosen<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="dosen" id="dosen"
                value="{{$data->dosen}}">
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-primary">Ubah</button>
                <a href="{{url('kelompok-mhs')}}" class="btn btn-success">Kembali</a>
            </div>
        </form>
    </div>
</div>
</div>