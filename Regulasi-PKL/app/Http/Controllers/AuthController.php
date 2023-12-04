<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    //

    public function signUp(){
        return view('auth.register');
    }

    public function signIn(){
        return view('auth.login');
    }

    public function dashboard()
    {
        
        return redirect('dashboard');
    }
    public function login()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($attributes)) {
            $user = Auth::user(); // Mendapatkan objek pengguna yang berhasil login
            session()->regenerate();
    
            if ($user->role == 'admin') {
                return redirect('dashboard')->with(['success' => 'You are logged in as admin.']);
            } elseif ($user->role == 'dosen') {
                return redirect('dashboard_dosen')->with(['success' => 'You are logged in as Dosen.']);
            } elseif ($user->role == 'mahasiswa') {
                return redirect('dashboard_mahasiswa')->with(['success' => 'You are logged in as Mahasiswa.']);
            } 
        } else {
            return back()->withErrors(['email' => 'Email or password invalid.']);
        }
    }

    public function register()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users', 'email')],
            'password' => ['required', 'min:5', 'max:20'],
        ]);
        $attributes['password'] = bcrypt($attributes['password'] );


        session()->flash('success', 'berhasil daftar');
        $user = User::create($attributes);
        return redirect('signIn');
    }

    public function destroyAdmin()
    {
        Auth::logout();
        
        return redirect('/signIn')->with(['success'=>'You\'ve been logged out.']);
    }

    public function destroyDosen()
    {
        Auth::logout();
        return redirect('/signIn')->with(['success'=>'You\'ve been logged out.']);
    }

    public function destroyMahasiswa()
    {
        Auth::logout();
        return redirect('/signIn')->with(['success'=>'You\'ve been logged out.']);
    }


}
