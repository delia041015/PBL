<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mahasiswa;

class AdminController extends Controller
{
    //
  
    public function dataUser(){
        $data = User::paginate(5);
    return view('admin.data_user', ['dataUser' => $data]);
    }

    public function Mahasiswa(){
        $data = Mahasiswa::paginate(5);
        return view('admin.mahasiswa',['datamhs'=> $data]);
    }

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
        return redirect('/dashboard');
    }

}
