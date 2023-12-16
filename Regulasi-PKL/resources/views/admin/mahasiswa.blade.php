@extends('layouts.sidebar')

@section('content')


<div class="breadcrumb-wrapper">
	<h1>DATA MAHASISWA</h1>


        <nav aria-label="breadcrumb">
          <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
              <a href="index.html">
                <span class="mdi mdi-home"></span>
              </a>
            </li>
            <li class="breadcrumb-item">
              Mahasiswa
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



				<button type="button"  class="btn btn-outline-primary btn-sm text-uppercase" data-toggle="modal" data-target="#exampleModalTambah">
					CREATE Mahasiswa
				</button>
			</div>
	{{-- @include('admin.create_mhs') --}}
    <div class="card-body">
                {{-- kjhg --}}
				<div class="hoverable-data-table">
					<table id="basic-data-table" class="table nowrap" style="width:100%">
						<thead>
							<tr>
                                <th style="width:1%">No.</th>
                                {{-- <th style="width:5%">Id Mahasiswa</th> --}}
                                {{-- <th style="width:5%">Id User</th> --}}
                                <th style="width:5%">NIM</th>
                                <th style="width:5%">Nama Mahasiswa</th>
                                <th style="width:5%">Kelas</th>
                                <th style="width:5%">Tempat PKL</th>
                                <th style="width:5%">Id Dosen</th>
                                <th style="width:5%">Aksi</th>
							</tr>
						</thead>

						<tbody>
                            @foreach ($datamhs as $data)
                            <tr>
                                <td> {{ $loop->iteration }}</td>
                                {{-- <td> {{ $data->id_mhs }}</td> --}}
                                {{-- <td> {{ $data->id_user }}</td> --}}
                                <td> {{ $data->nim }}</td>
                                <td> {{ $data->nama }}</td>
                                <td> {{ $data->kelas }}</td>
                                <td> {{ $data->tempat_pkl }}</td>
                                <td> {{ $data->id_dosen }}</td>
                                <td>
                                    <form action="{{ route('delete-mahasiswa', $data->id_mhs) }}" method="post">@csrf
                                        
                                        <a href="{{ route('edit-mahasiswa', $data->id_mhs) }}" class="btn btn-warning">Edit</a>
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


</div>

<div class="modal fade" id="exampleModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalFormTitle">Create Mahasiswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<form action="/mahasiswa" method="POST">
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

@endsection
