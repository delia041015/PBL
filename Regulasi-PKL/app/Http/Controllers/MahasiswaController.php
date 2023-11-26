<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(){
        $data = Mahasiswa::all();
            return view('mahasiswa.index', ['dataMahasiswa'=> $data]);
    }
    public function create(){
        return view('mahasiswa.create');
    }
    public function store(Request $request){
        $data = new Mahasiswa();
        $data->id_mhs = $request->id_mahasiswa;
        $data->id_user = $request->id_user;
        $data->nim = $request->nim;
        $data->nama = $request->nama;
        $data->kelas = $request->kelas;
        $data->tempat_pkl = $request->tempat_pkl;
        $data->id_dosen = $request->id_dosen;
        $data->save();
        return redirect('/index-mahasiswa');
    }
    public function edit($id){
        $data = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('data'));
    }
}
