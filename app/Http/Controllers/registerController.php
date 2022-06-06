<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register'
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'namaLengkap' => 'required|max:255',
            'alamat' => 'required|max:255',
            'email' => 'required|max:255|unique:users',
            'password' => 'required|min:5|max:255',
        ]);
        dd('registrasi berhasil');
    }
}
