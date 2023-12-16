<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit($id)
    {
        $data = User::find($id);
        return view('profile.edit', compact('data'));
    }

    public function update (Request $request, $id){
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->role = $request->role;
        $data->update();
        return redirect('/sidebar_mahasiswa');
    }

    // public function edit($id)
    // {
    //     $data = User::find($id);
    //     return view('profile.edit', compact('data'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $data = User::find($id);

    //     // Validasi input sesuai kebutuhan Anda
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users,email,' . $id,
    //         'password' => 'nullable|string|min:8|confirmed',
    //         'role' => 'nullable',
    //     ]);

    //     $data->name = $request->name;
    //     $data->email = $request->email;
    //     $data->password = $request->password;
    //     $data->role = $request->role;

    //     // // Update password jika disediakan
    //     // if ($request->filled('password')) {
    //     //     $data->password = Hash::make($request->password);
    //     // }
        

    //     // Simpan perubahan
    //     $data->save();

    //     return redirect('/sidebar_mahasiswa');
    // }
}
