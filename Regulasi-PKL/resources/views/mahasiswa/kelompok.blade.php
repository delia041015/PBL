@extends('layouts.sidebar_mahasiswa')

@section('content')


<div class="breadcrumb-wrapper">
	<h1>DATA KELOMPOK</h1>


        <nav aria-label="breadcrumb">
          <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
              <a href="index.html">
                <span class="mdi mdi-home"></span>
              </a>
            </li>
            <li class="breadcrumb-item">
              Kelompok
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
					CREATE KELOMPOK
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
                                {{-- <th style="width:5%">Id Kelompok</th> --}}
                                <th style="width:5%">Nama</th>
                                <th style="width:5%">Ketua</th>
                                <th style="width:5%">Anggota 1</th>
                                <th style="width:5%">Anggota 2</th>
                                <th style="width:5%">Instansi</th>
                                <th style="width:5%">Dosen</th>
                                <th style="width:5%">Aksi</th>
							</tr>
						</thead>

						<tbody>
                            @foreach ($dataKelompok as $data)
                            <tr>
                                <td> {{ $loop->iteration }}</td>
                                {{-- <td> {{ $data->id_kelompok }}</td> --}}
                                <td> {{ $data->nama_kelompok }}</td>
                                <td> {{ $data->ketua }}</td>
                                <td> {{ $data->anggota1 }}</td>
                                <td> {{ $data->anggota2 }}</td>
                                <td> {{ $data->instansi }}</td>
                                <td> {{ $data->dosen }}</td>
                                <td>
                                    <form action="{{ route('delete-kelompok', $data->id_kelompok) }}" method="post">@csrf
                                        
                                        <a href="{{ route('edit-kelompok', $data->id_kelompok) }}" class="btn btn-warning">Edit</a>
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
				<h5 class="modal-title" id="exampleModalFormTitle">Create Kelompok</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<form action="/kelompok-mhs" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id_kelompok">Id_kelompok <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="id_kelompok" id="id_kelompok">
                    </div>

                    <div class="form-group">
                        <label for="nama_kelompok">Nama <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="nama_kelompok" id="nama_kelompok">
                    </div>

                    <div class="form-group">
                        <label for="ketua">Ketua <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="ketua" id="ketua">
                    </div>
                    <div class="form-group">
                        <label for="anggota1">Angoota 1 <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="anggota1" id="anggota1">
                    </div>
                    <div class="form-group">
                        <label for="anggota2">Anggota 2 <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="anggota2" id="anggota2">
                    </div>
                    <div class="form-group">
                        <label for="instansi">Instansi <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="instansi" id="instansi">
                    </div>
                    <div class="form-group">
                        <label for="dosen">Dosen <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="dosen" id="dosen">
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
