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
	@include('admin.create_user')
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
						@foreach($dataUser as $key => $data)
							<tr>
							 <td>{{ $dataUser->firstItem() + $key }}</td>
                       		 <td>{{ $data->name }}</td>
                       		 <td>{{ $data->email }}</td>
							 <td>{{ $data->role }}</td>
							 <td>{{ $data->created_at }}</td>
							 <td>
                                    <form action="{{ route('delete-user', $data->id_user) }}" method="post">@csrf
                                        
                                        <a href="{{ route('edit-user', $data->id_user) }}" class="btn btn-warning">Edit</a>
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
{{ $dataUser -> links() }}

</div>
@endsection