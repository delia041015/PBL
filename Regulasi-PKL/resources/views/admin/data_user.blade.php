@extends('layouts.sidebar')

@section('content')


<div class="breadcrumb-wrapper">
	<h1>DATA</h1>
	
	
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
              <a href="index.html">
                <span class="mdi mdi-home"></span>                
              </a>
            </li>
            <li class="breadcrumb-item">
              data
            </li>
            <li class="breadcrumb-item" aria-current="page">{{ Route::currentRouteName() }}</li>
          </ol>
        </nav>

</div>

<div class="row">
	<div class="col-12">
		<div class="card card-default">
			<div class="card-header card-header-border-bottom d-flex justify-content-between">
            <h2>{{ strtoupper(Route::currentRouteName()) }}</h2>


			
				<button type="button"  class="btn btn-outline-primary btn-sm text-uppercase" data-toggle="modal" data-target="#exampleModalForm">
					CREATE USER
				</button>
			</div>
	{{-- @include('admin.create_user') --}}
			<div class="card-body">
				<div class="hoverable-data-table">
					<table id="tabel-user" class="table nowrap" style="width:100%">
						<thead>
							<tr>
								<th>NO</th>
								<th>Name</th>
								<th>Email</th>
								<th>Role</th>
								<th>Buat akun</th>
								<th>Aksi</th>
							</tr>
						</thead>

						<tbody>
						@foreach($dataUser as $data)
							<tr>
								<td> {{ $loop->iteration }}</td>
								<td>{{ $data->name }}</td>
								<td>{{ $data->email }}</td>
								<td>{{ $data->role }}</td>
								<td>{{ $data->created_at }}</td>
								<td>
                                    <form action="{{ route('delete-user', $data->id) }}" method="post">@csrf
                                        
                                        <a href="{{ route('edit-user', $data->id) }}" class="btn btn-warning">Edit</a>
                                        <button class = "btn btn-danger">Delete</button>
                                    </form>                                    
                                </td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
{{-- {{ $dataUser -> links() }} --}}

</div>
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
				@csrf
                    <div class="form-group">
                        <label for="id">Id_User <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="id" id="id">
                    </div>
                <div class="form-group">
						<label for="namer">Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Name">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
					</div>

					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					</div>

                  
						Role
						<select class="custom-select my-1 mr-sm-2" id="role" name="role">
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

@endsection