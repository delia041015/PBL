<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <!-- Add these lines in the <head> section of your HTML document -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    {{-- <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalFormTitle">My Profile</h5>
            </div>

            <div class="modal-body">
                <form method="post" action="{{ route('profile.update', ['id' => $user->id]) }}">
                    @csrf
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>

                    <select class="custom-select my-1 mr-sm-2" id="role" name="role">
                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="dosen" {{ $user->role == 'dosen' ? 'selected' : '' }}>Dosen</option>
                        <option value="mahasiswa" {{ $user->role == 'mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
                    </select>
                
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal" onclick="window.location.href='{{ route('dashboard_mahasiswa') }}'">Close</button>
                <button type="submit" class="btn btn-primary btn-pill">Save Changes</button>
            </div>
            </form>
        </div>
    </div> --}}

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalFormTitle">My Profile</h5>
            </div>
    
            <div class="modal-body">
                <form action="{{ route('profile.update',$data->id) }}" method="post">
                    @csrf
    
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{($data->name)}}" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $data->email) }}" placeholder="Enter email">
                    </div>
    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
    
                    {{-- <select class="custom-select my-1 mr-sm-2" id="role" name="role"  >
                        <option value="admin" {{ $data->role == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="dosen" {{ $data->role == 'dosen' ? 'selected' : '' }}>Dosen</option>
                        <option value="mahasiswa" {{ $data->role == 'mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
                    </select> --}}
                
            </div>
    
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal" onclick="window.location.href='{{ route('sidebar_mahasiswa') }}'">Close</button>
                <button type="submit" class="btn btn-primary btn-pill">Save Changes</button>
            </div>
            </form>
        </div>
    </div>
</body>
</html>
