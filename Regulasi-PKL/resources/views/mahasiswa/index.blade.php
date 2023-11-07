<div class="container">
    <h2>Tabel Mahasiswa</h2>
    <a href="{{route('mahasiswa.create')}}" class="btn btn-success">+New Data</a>
    <table class="table table-bordered table striped" id="tabel-mahasiswa">
        <thead>
            <tr>
                <th style="width:1%">No.</th>
                <th style="width:5%">NIM</th>
                <th style="width:5%">Nama Mahasiswa</th>
                <th style="width:5%">Kelas</th>
                <th style="width:5%">Aksi</th>
            </tr> 
        </thead>
        <tbody>
            @foreach ($dataMahasiswa as $data) 
            <tr>
                <td> {{ $loop->iteration }}</td>
                <td> {{ $data->nim }}</td>
                <td> {{ $data->nama }}</td>
                <td> {{ $data->kelas }}</td> 
                <td> 
                    <form action="{{route('mahasiswa.delete', $data->nim)}}" method="post">@csrf
                        <a href="{{route('mahasiswa.edit', $data->nim)}}" class="btn btn-warning">Edit</a>
                        <button class = "btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection