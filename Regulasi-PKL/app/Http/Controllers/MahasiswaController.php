<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Instansi;

class MahasiswaController extends Controller
{
    // public function index(){
    //     $data = Mahasiswa::all();
    //         return view('mahasiswa.index', ['dataMahasiswa'=> $data]);
    // }

    public function Mahasiswa(){
        $data = Mahasiswa::paginate(5);
        return view('admin.mahasiswa',['datamhs'=> $data]);
    }
    public function Instansi(){
        $data = Instansi::paginate(5);
        return view('mahasiswa.instansi',['dataInstansi'=> $data]);
    }
    // public function create(){
    //     return view('mahasiswa.create');
    // }
    public function store(Request $request){
        $data = new Mahasiswa();
        $data->id_mhs = $request->id_mhs;
        $data->id_user = $request->id_user;
        $data->nim = $request->nim;
        $data->nama = $request->nama;
        $data->kelas = $request->kelas;
        $data->tempat_pkl = $request->tempat_pkl;
        $data->id_dosen = $request->id_dosen;
        $data->save();
        return redirect('/mahasiswa');
    }
    public function edit($id_mhs){
        $data = Mahasiswa::find($id_mhs);
        return view('mahasiswa.edit', compact('data'));
    }
    public function update(Request $request, $id_mhs){
        $data = Mahasiswa::find($id_mhs);
        // $data->id_mhs = $request->id_mhs;
        $data->id_user = $request->id_user;
        $data->nim = $request->nim;
        $data->nama = $request->nama;
        $data->kelas = $request->kelas;
        $data->tempat_pkl= $request->tempat_pkl;
        $data->id_dosen = $request->id_dosen;
        $data->update();
        return redirect('/mahasiswa');
    }
    public function destroy($id_mhs){
        $data = Mahasiswa::find($id_mhs);
        $data->delete();
        return redirect('/mahasiswa');
    }

}
