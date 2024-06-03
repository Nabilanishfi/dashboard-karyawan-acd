<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Email harus valid.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 6 karakter',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'admin'){
                return redirect()->route('admin.dashboard');
            }elseif(Auth::user()->role == 'manager'){
                return redirect('admin.dashboard');
            }
        }else{
            return redirect('')->withErrors('Username dan Password yang dimasukkan tidak sesuai!')->withInput();
        }
    }

    function logout(){
        Auth::logout();
        
        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('login')->with('message', 'Pengguna berhasil logout!');
    }
}
