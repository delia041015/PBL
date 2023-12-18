<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Kelompok;


class AdminController extends Controller
{
    public function dataUser()
    {
        $data = User::paginate(5);
        return view('admin.data_user', ['dataUser' => $data]);
    }

    public function mahasiswa()
    {
        $data = Mahasiswa::paginate(5);
        return view('admin.mahasiswa', ['datamhs' => $data]);
    }

    public function store(Request $request)
    {
        $message = [
            'required' => ':attribute tidak boleh kosong',
            'unique' => ':attribute sudah digunakan',
            'numeric' => ':attribute harus berupa angka',
        ];

        $this->validate($request, [
            'id' => 'required|unique:users|numeric',
            'name' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required'
        ], $message);

        $data = new User();
        $data->id = $request->id;
        $data->name = $request->name;
        $data->password = $request->password;
        $data->role = $request->role;
        $data->save();
        return redirect('/data-user')->with('success', 'Data berhasil disimpan!');
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('user.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $message = [
            'required' => ':attribute tidak boleh kosong',
            'unique' => ':attribute sudah digunakan',
            'numeric' => ':attribute harus berupa angka',
        ];

        $this->validate($request, [
            'id' => 'required|numeric',
            'name' => 'required',
            'password' => 'required',
            'role' => 'required'
        ], $message);

        $data = User::find($id);
        $data->name = $request->name;
        $data->password = $request->password;
        $data->role = $request->role;
        $data->save();
        return redirect('/data-user')->with('success', 'Data berhasil disimpan!');
    }

    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('/data-user')->with('success', 'Data berhasil dihapus!');
    }
}
