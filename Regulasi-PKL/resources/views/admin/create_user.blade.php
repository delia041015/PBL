<div class="modal fade" id="exampleModalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalFormTitle">Create User</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
			<form action="/data-user" method="POST">
                <div class="form-group">
						<label for="namer">Name</label>
						<input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Name">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					</div>

					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
                  
						Sebagai
						<select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
							<option selected>Choose...</option>
							<option value="admin">Admin</option>
							<option value="dosen">Dosen</option>
							<option value="mahasiswa">Mahasiswa</option>
						</select>
				
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary btn-pill">Save Changes</button>
			</div>
            </form>
		</div>
	</div>
</div>