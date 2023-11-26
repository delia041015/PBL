<head>
        <title>REGULASI PKL</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    </head>

<div class="container">
    <h2>Tabel Mahasiswa</h2>
    <a href="{{route('create-mahasiswa')}}" class="btn btn-success">+New Data</a>
    <table class="table table-bordered table striped" id="tabel-mahasiswa">
        <thead>
            <tr>
                <th style="width:1%">No.</th>
                <th style="width:5%">Id Mahasiswa</th>
                <th style="width:5%">Id User</th>
                <th style="width:5%">NIM</th>
                <th style="width:5%">Nama Mahasiswa</th>
                <th style="width:5%">Kelas</th>
                <th style="width:5%">Tempat PKL</th>
                <th style="width:5%">Id Dosen</th>
                <th style="width:5%">Aksi</th>
            </tr> 
        </thead>
        <tbody>
            @foreach ($dataMahasiswa as $data) 
            <tr>
                <td> {{ $loop->iteration }}</td>
                <td> {{ $data->id_mahasiswa }}</td>
                <td> {{ $data->id_user }}</td>
                <td> {{ $data->nim }}</td>
                <td> {{ $data->nama }}</td>
                <td> {{ $data->kelas }}</td> 
                <td> {{ $data->tempat_pkl }}</td> 
                <td> {{ $data->id_dosen }}</td> 
                <td> 
                    <form action="" method="post">@csrf
                        <a href="" class="btn btn-warning">Edit</a>
                        <button class = "btn btn-danger">Delete</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
