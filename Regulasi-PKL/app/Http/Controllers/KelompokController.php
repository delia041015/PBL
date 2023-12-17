<?php

namespace App\Http\Controllers;

use App\Models\Instansi;
use Illuminate\Http\Request;
use App\Models\Kelompok;
use App\Models\Mahasiswa;
use App\Models\Dosen;
class KelompokController extends Controller
{
    public function Kelompok(){
        $data = Kelompok::paginate(5);
        $categories = Mahasiswa::all();
        $ins = Instansi::all();
        $dosen = Dosen::all();
        return view('mahasiswa.kelompok',['dataKelompok'=> $data],compact('categories','ins','dosen'));
    }

    public function Kelompok_adm(){
        $data = Kelompok::paginate(5);
        $categories = Mahasiswa::all();
        $ins = Instansi::all();
        $dosen = Dosen::all();
        return view('admin.kelompok',['dataKelompok'=> $data],compact('categories','ins','dosen'));
    }
    public function Kelompok_dosen(){
        $data = Kelompok::paginate(5);
        $categories = Mahasiswa::all();
        $ins = Instansi::all();
        $dosen = Dosen::all();
        return view('dosen.kelompok',['dataKelompok'=> $data],compact('categories','ins','dosen'));
    }

    public function store(Request $request){
        $data = new Kelompok();
        $data->id_kelompok = $request->id_kelompok;
        $data->nama_kelompok = $request->nama_kelompok;
        $data->ketua_id = $request->ketua;
        $data->anggota1_id= $request->anggota1;
        $data->anggota2_id = $request->anggota2;
        $data->instansi_id= $request->instansi;
        $data->dosen_id = $request->dosen;
        $data->save();
        return redirect('/kelompok-adm');
    }
    public function store2(Request $request){
        $data = new Kelompok();
        $data->id_kelompok = $request->id_kelompok;
        $data->nama_kelompok = $request->nama_kelompok;
        $data->ketua_id = $request->ketua;
        $data->anggota1_id= $request->anggota1;
        $data->anggota2_id = $request->anggota2;
        $data->instansi_id= $request->instansi;
        $data->dosen_id = $request->dosen;
        $data->save();
        return redirect('/kelompok-mhs');
    }
    public function edit($id_kelompok){
        $data = Kelompok::find($id_kelompok);
        $categories = Mahasiswa::all();
        $ins = Instansi::all();
        $dosen = Dosen::all();
        return view('kelompok.edit', compact('data','categories','ins','dosen'));
    }
    public function update(Request $request, $id_kelompok){
        $data = Kelompok::find($id_kelompok);
        $data->id_kelompok = $request->id_kelompok;
        $data->nama_kelompok = $request->nama_kelompok;
        $data->ketua_id = $request->ketua;
        $data->anggota1_id= $request->anggota1;
        $data->anggota2_id = $request->anggota2;
        $data->instansi_id= $request->instansi;
        $data->dosen_id = $request->dosen;
        $data->update();
        return redirect('/kelompok-adm');
    }
    public function destroy($id_kelompok){
        $data = Kelompok::find($id_kelompok);
        $data->delete();
        return redirect('/kelompok-adm');
    }
}
