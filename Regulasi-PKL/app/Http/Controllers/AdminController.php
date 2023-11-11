<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //
  
    public function dataUser(){
        $data = User::paginate(5);
    return view('admin.data_user', ['dataUser' => $data]);
    }

}
