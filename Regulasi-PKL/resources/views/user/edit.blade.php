<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGULASI PKL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>
<body style="background-color: #f8f9fa;">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="bg-white p-4 rounded shadow">
                <h4 class="text-center text-primary mb-4">Edit Data User</h4>
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('update-user', $data->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="id" class="form-label">id_user<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="id" id="id" value="{{$data->id}}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="name" id="name" value="{{$data->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="email" id="email" value="{{$data->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="password" id="password" value="{{$data->password}}">
                    </div>
                    <div>
                        Role
                        <select class="custom-select my-1 mr-sm-2" id="role" name="role">
                            <option value="admin" {{ $data->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="dosen" {{ $data->role == 'dosen' ? 'selected' : '' }}>Dosen</option>
                            <option value="mahasiswa" {{ $data->role == 'mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
                        </select>
                    </div>

                    </div>
						
                    <!-- <div class="mb-3">
                        <label for="role" class="form-label">Role <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="role" id="role" value="{{$data->role}}">
                    </div> -->
                    <br>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                        <a href="/data-user" class="btn btn-success">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
