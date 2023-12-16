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
        <h4>Edit Data Instansi</h4>
        <br>
        <form action="{{ route('update-instansi', $data->id_instansi) }}" method="POST">
            @csrf
            <div class="form-group">
            <label for="id_instansi">Id_Instansi <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="id_instansi" id="id_instansi"
                value="{{$data->id_instansi}}">
            </div>
            <div class="form-group">
                <label for="nama">Nama Instansi<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama" id="nama"
                value="{{$data->nama}}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="alamat" id="alamat"
                value="{{$data->alamat}}">
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-primary">Ubah</button>
                <a href="{{url('instansi')}}" class="btn btn-success">Kembali</a>
            </div>
        </form>
    </div>
</div>
</div>