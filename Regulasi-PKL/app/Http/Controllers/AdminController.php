<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Kelompok;

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
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->role = $request->role;
        $data->save();
        return redirect('/dashboard');
    }

}
