<div class="modal fade" id="exampleModalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalFormTitle">Create Mahasiswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<form action="/dashboard" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id_mhs">Id_Mahasiswa <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="id_mhs" id="id_mhs">
                    </div>

                    <div class="form-group">
                        <label for="id_user">Id_User <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="id_user" id="id_user">
                    </div>

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

                    <div class="form-group"> <!-- Perbaiki bagian ini -->
                        <label for="tempat_pkl">Tempat PKL <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="tempat_pkl" id="tempat_pkl">
                    </div>



                    <div class="form-group">
                        <label for="nim">Id_Dosen <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="id_dosen" id="id_dosen">
                    </div>


			<div class="modal-footer">
				<button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary btn-pill">Save Changes</button>
			</div>
            </form>
		</div>
	</div>
</div>
