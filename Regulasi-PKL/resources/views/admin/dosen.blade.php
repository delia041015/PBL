@extends('layouts.sidebar')

@section('content')

<!--Pengkondisian validasi form-->
@if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li> {{$error}} </li>
            @endforeach
          /ul>
        </div>
      @endif

<div class="breadcrumb-wrapper">
	<h1>DATA DOSEN</h1>


        <nav aria-label="breadcrumb">
          <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
              <a href="index.html">
                <span class="mdi mdi-home"></span>
              </a>
            </li>
            <li class="breadcrumb-item">
              Dosen
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
					CREATE Dosen
				</button>
			</div>
	{{-- @include('admin.create_mhs') --}}
    <div class="card-body">
                {{-- kjhg --}}
				<div class="hoverable-data-table">
					<table id="tabel-dosen" class="table nowrap" style="width:100%">
						<thead>
							<tr>
                <th style="width:1%">No.</th>
                {{-- <th style="width:5%">Id Dosen</th> --}}
                {{-- <th style="width:5%">Id User</th> --}}
                <th style="width:5%">NIP</th>
                <th style="width:5%">Nama Dosen</th>
                <th style="width:5%">Alamat</th>
                <th style="width:5%">No HP</th>
                <th style="width:5%">Aksi</th>
							</tr>
						</thead>

						<tbody>
                            @foreach ($dataDosen as $data)
                            <tr>
                                <td> {{ $loop->iteration }}</td>
                                {{-- <td> {{ $data->id_dosen }}</td> --}}
                                {{-- <td> {{ $data->id_user }}</td> --}}
                                <td> {{ $data->nip }}</td>
                                <td> {{ $data->nama }}</td>
                                <td> {{ $data->alamat }}</td> 
                                <td> {{ $data->no_hp }}</td> 
                                <td>
                                    <form action="{{ route('delete-dosen', $data->id_dosen) }}" method="post">@csrf
                                        
                                        <a href="{{ route('edit-dosen', $data->id_dosen) }}" class="btn btn-warning">Edit</a>
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
				<h5 class="modal-title" id="exampleModalFormTitle">Create Dosen</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">

      <!--Pengkondisian validasi form-->
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li> {{$error}} </li>
            @endforeach
          
        </div>
      @endif
      
				<form action="/dosen-adm" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="id_dosen">Id_Dosen <span class="text-danger">*</span></label>
                      <input class="form-control" type="text" name="id_dosen" id="id_dosen">
                  </div>
  
                  <div class="form-group">
                      <label for="nip">NIP <span class="text-danger">*</span></label>
                      <input class="form-control" type="text" name="nip" id="nip">
                  </div>
                 
                  <div class="form-group"> <!-- Perbaiki bagian ini -->
                      <label for="nama">Nama<span class="text-danger">*</span></label>
                      <input class="form-control" type="text" name="nama" id="nama">
                  </div>
  
                  <div class="form-group"> <!-- Perbaiki bagian ini -->
                      <label for="alamat">Alamat <span class="text-danger">*</span></label>
                      <input class="form-control" type="text" name="alamat" id="alamat">
                  </div>
  
                  <div class="form-group"> <!-- Perbaiki bagian ini -->
                      <label for="no_hp">No HP <span class="text-danger">*</span></label>
                      <input class="form-control" type="text" name="no_hp" id="no_hp">
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
