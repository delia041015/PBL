<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

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
    // public function create(){
    //     return view('dosen.create');
    // }
    public function store(Request $request){
        $data = new Dosen();
        $data->id_dosen = $request->id_dosen;
        $data->id_user = $request->id_user;
        $data->nip = $request->nip;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->save();
        return redirect('/dosen');
    }
    public function edit($id_dosen){
        $data = Dosen::find($id_dosen);
        return view('dosen.edit', compact('data'));
    }
    public function update(Request $request, $id_dosen){
        $data = Dosen::find($id_dosen);
        $data->id_dosen = $request->id_dosen;
        $data->id_user = $request->id_user;
        $data->nip = $request->nip;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->update();
        return redirect('/dosen');
    }
    public function destroy($id_dosen){
        $data = Dosen::find($id_dosen);
        $data->delete();
        return redirect('/dosen');
    }
}
