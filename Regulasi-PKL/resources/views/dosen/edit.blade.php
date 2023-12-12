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
            <h4>Edit Data Dosen</h4>
            <br>
            <form action="{{ route('update-dosen', $data->id_dosen) }}" method="POST">
                @csrf
                <div class="form-group">
                <label for="id_dosen">Id_Dosen <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="id_dosen" id="id_dosen"
                    value="{{$data->id_dosen}}">
                </div>
                <div class="form-group">
                <label for="id_user">Id_User <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="id_user" id="id_user"
                    value="{{$data->id_user}}">
                </div>
                <div class="form-group">
                    <label for="nip">NIP <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nip" id="nip"
                    value="{{$data->nip}}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nama" id="nama"
                    value="{{$data->nama}}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="alamat" id="alamat"
                    value="{{$data->alamat}}">
                </div>
                <div class="form-group">
                    <label for="no_hp">No HP <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="no_hp" id="no_hp"
                    value="{{$data->no_hp}}">
                </div>
               
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    <a href="{{url('index-dosen')}}" class="btn btn-success">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
