@extends('layouts.sidebar')

@section('content')


<div class="breadcrumb-wrapper">
	<h1>DATA INSTANSI</h1>


        <nav aria-label="breadcrumb">
          <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
              <a href="index.html">
                <span class="mdi mdi-home"></span>
              </a>
            </li>
            <li class="breadcrumb-item">
              Instansi
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
					CREATE Instansi
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
                                {{-- <th style="width:5%">Id Instansi</th> --}}
                                <th style="width:5%">Nama</th>
                                <th style="width:5%">Alamat</th>
                                <th style="width:5%">Aksi</th>
							</tr>
						</thead>

						<tbody>
                            @foreach ($dataInstansi as $data)
                            <tr>
                                <td> {{ $loop->iteration }}</td>
                                {{-- <td> {{ $data->id_instansi }}</td> --}}
                                <td> {{ $data->nama }}</td>
                                <td> {{ $data->alamat }}</td>
                                <td>
                                    <form action="{{ route('delete-instansi', $data->id_instansi) }}" method="post">@csrf
                                        
                                        <a href="{{ route('edit-instansi', $data->id_instansi) }}" class="btn btn-warning">Edit</a>
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
				<h5 class="modal-title" id="exampleModalFormTitle">Create Instansi</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<form action="/instansi" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id_instansi">Id_Instansi <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="id_instansi" id="id_instansi">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="nama" id="nama">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="alamat" id="alamat">
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
