<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelompok;

class KelompokController extends Controller
{
    public function Kelompok(){
        $data = Kelompok::paginate(5);
        return view('mahasiswa.kelompok',['dataKelompok'=> $data]);
    }

    public function store(Request $request){
        $data = new Kelompok();
        $data->id_kelompok = $request->id_kelompok;
        $data->nama_kelompok = $request->nama_kelompok;
        $data->ketua = $request->ketua;
        $data->anggota1= $request->anggota1;
        $data->anggota2 = $request->anggota2;
        $data->instansi= $request->instansi;
        $data->dosen = $request->dosen;
        $data->save();
        return redirect('/kelompok-mhs');
    }
    public function edit($id_kelompok){
        $data = Kelompok::find($id_kelompok);
        return view('kelompok.edit', compact('data'));
    }
    public function update(Request $request, $id_kelompok){
        $data = Kelompok::find($id_kelompok);
        $data->id_kelompok = $request->id_kelompok;
        $data->nama_kelompok = $request->nama_kelompok;
        $data->ketua = $request->ketua;
        $data->anggota1= $request->anggota1;
        $data->anggota2 = $request->anggota2;
        $data->instansi= $request->instansi;
        $data->dosen = $request->dosen;
        $data->update();
        return redirect('/kelompok-mhs');
    }
    public function destroy($id_kelompok){
        $data = Kelompok::find($id_kelompok);
        $data->delete();
        return redirect('/kelompok-mhs');
    }
}
