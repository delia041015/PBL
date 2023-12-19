@extends('layouts.sidebar_mahasiswa')

@section('content')


<div class="breadcrumb-wrapper">
	<h1>DATA SURAT</h1>


        <nav aria-label="breadcrumb">
          <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
              <a href="/surat-mhs">
                <span class="mdi mdi-home"></span>
              </a>
            </li>
            <li class="breadcrumb-item">
                Surat
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
					AJUKAN SURAT
				</button>
			</div>
	{{-- @include('admin.create_mhs') --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card-body">
                {{-- kjhg --}}
				<div class="hoverable-data-table">
                    
					<table id="tabel-kelompok" class="table nowrap" style="width:100%">
						<thead>
							<tr>
                                <th style="width:1%">No.</th>
                                <th style="width:1%">Id</th>
                                <th style="width:5%">File</th>
                                <th style="width:5%">Status</th>
                                <th style="width:5%">Aksi</th>
							</tr>
						</thead>

						<tbody>
                            @foreach ($dataSurat as $data)
                            <tr>
                                <td> {{ $loop->iteration }}</td>
                                <td> {{ $data->id_surat }}</td>
                                <<td>{{ basename($data->nama_surat) }}</td>
                                <td>{{ $data->status }}</td>
                                <td>
                                    @if ($data->status === 'diterima')
                                        <a href="{{ route('surat.download', ['id' => $data->id_surat]) }}" class="btn btn-success">Download</a>
                                    @else
                                        <h5>-</h5>
                                    @endif
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
				<h5 class="modal-title" id="exampleModalFormTitle">Ajukan Surat</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<form action="/surat-mhs" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="id_surat">Id_Surat <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="id_surat" id="id_surat">
                    </div>

                    <div class="form-group">
                        <label for="nama_surat" class="form-label">Pilih Surat yang akan diajukan</label>
                        <input class="form-control" type="file" id="nama_surat" name="nama_surat">
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
