
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Edit Data Mahasiswa</h4>
            <br>
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nim">NIM <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nim" id="nim"
                    value="{{$data->id}}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Mahasiswak <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nama" id="nama"
                    value="{{$data->nama_produk}}">
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="kelas" id="kelaas"
                    value="{{$data->harga}}">
                </div>
               
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    <a href="" class="btn btn-success">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection