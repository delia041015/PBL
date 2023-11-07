<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Form Input Data Mahasiswa</h4>
            <br>
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nim">NIM <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nim" id="nim">
                </div>
                <div class="form-group"> <!-- Perbaiki bagian ini -->
                    <label for="nama">Nama<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nama" id="nama">
                </div>
                <div class="form-group"> <!-- Perbaiki bagian ini -->
                    <label for="kelas">Kelas <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="kelas" id="kelas">
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="" class="btn btn-success">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection