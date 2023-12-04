<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
}
