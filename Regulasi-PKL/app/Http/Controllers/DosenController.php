<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Instansi;

class DosenController extends Controller
{
    // public function index(){
    //     $data = Dosen::all();
    //         return view('dosen.index', ['dataDosen'=> $data]);
    // }
    public function Dosen(){
        $data = Dosen::paginate(5);
        return view('admin.dosen',['dataDosen'=> $data]);
    }
    public function Mahasiswa(){
        $data = Mahasiswa::paginate(5);
        return view('dosen.mahasiswa',['datamhs'=> $data]);
    }
    public function Dosen2(){
        $data = Dosen::paginate(5);
        return view('dosen.dosen',['dataDosen'=> $data]);
    }

    public function Instansi(){
        $data = Instansi::paginate(5);
        return view('dosen.instansi',['dataInstansi'=> $data]);
    }
    // public function create(){
    //     return view('dosen.create');
    // }
    public function store(Request $request){
        $message= [
            'required' => ':attribute tidak boleh kosong',
            'unique' => ':attribute sudah digunakan',
            'numeric' => ':attribute harus berupa angka',
        ];

        $this->validate($request, [
            'id_dosen' => 'required|unique:dosen',
            'id_user' => 'required',
            'nip' => 'required',
            'nama' => 'required|unique:dosen',
            'alamat' => 'required',
            'no_hp' => 'required|numeric'
        ], $message);

        $data = new Dosen();
        $data->id_dosen = $request->id_dosen;
        $data->id_user = $request->id_user;
        $data->nip = $request->nip;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->save();
        return redirect('/dosen-adm')->with('success','Data berhasil disimpan!');
    }
    public function edit($id_dosen){
        $data = Dosen::find($id_dosen);
        return view('dosen.edit', compact('data'));
    }
    public function update(Request $request, $id_dosen){
        
        $message= [
            'required' => ':attribute tidak boleh kosong',
            'unique' => ':attribute sudah digunakan',
            'numeric' => ':attribute harus berupa angka',
        ];

        $this->validate($request, [
            'id_dosen' => 'required',
            'id_user' => 'required',
            'nip' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required|numeric'
        ], $message);
        $data = Dosen::find($id_dosen);
        $data->id_dosen = $request->id_dosen;
        $data->id_user = $request->id_user;
        $data->nip = $request->nip;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->update();
        return redirect('/dosen-adm')->with('success','Data berhasil diubah!');
    }
    public function destroy($id_dosen){
        $data = Dosen::find($id_dosen);
        $data->delete();
        return redirect('/dosen-adm')->with('success','Data berhasil dihapus!');
    }
}
