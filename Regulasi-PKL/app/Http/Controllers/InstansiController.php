<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instansi;

class InstansiController extends Controller
{
    // public function index(){
    //     $data = Instansi::all();
    //         return view('instansi.index', ['dataInstansi'=> $data]);
    // }
    public function Instansi(){
        $data = Instansi::paginate(5);
        return view('admin.instansi',['dataInstansi'=> $data]);
    }

    // public function create(){
    //     return view('instansi.create');
    // }
    public function store(Request $request){

        $message=[
            'required' => ':attribute tidak boleh kosong',
            'unique' => 'attribute sudah digunakan',
            'numeric' => 'attribute harus berupa angka',
        ];

        $this->validate($request, [
            'id_instansi' => 'required|numeric|unique:instansi',
            'nama' => 'required|unique:instansi',
            'alamat' => 'required'
        ], $message);
        $data = new Instansi();
        $data->id_instansi = $request->id_instansi;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect('/instansi-adm')-> with('success','Data Berhasil Ditambahkan');
    }
    public function edit($id_instansi){
        $data = Instansi::find($id_instansi);
        return view('instansi.edit', compact('data'));
    }
    public function update(Request $request, $id_instansi){
        $message=[
            'required' => ':attribute tidak boleh kosong',
            'unique' => 'attribute sudah digunakan',
            'numeric' => 'attribute harus berupa angka',
        ];

        $this->validate($request, [
            'id_instansi' => 'required|numeric',
            'nama' => 'required',
            'alamat' => 'required'
        ], $message);
        
        $data = Instansi::find($id_instansi);
        $data->id_instansi = $request->id_instansi;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->update();
        return redirect('/instansi-adm')-> with('success','Data Berhasil Diubah');
    }
    public function destroy($id_instansi){
        $data = Instansi::find($id_instansi);
        $data->delete();
        return redirect('/instansi-adm')-> with('success','Data Berhasil Dihapus');
    }
}
