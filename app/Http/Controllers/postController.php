<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class postController extends Controller
{
    public function laravel(){
        return view('welcome');
    }

    public function home(){
        return view('admin\home',[
            "title" => "Home",
            "produk" => Produk::all()
        ]);
    }

    public function pedagang(){
        return view('pedagang\homePedagang',[
            "title" => "Home",
            "produk" => Produk::all()
        ]);
    }

    public function tambahProduk(){
        return view('admin\tambahProduk');
    }

    public function ubahProduk(){
        return view('admin\ubahProduk');
    }

    public function reports(){
        return view('dashboard\reports\index',[
            'title' => 'Laporan Keuangan'
        ]);
    }

    public function profiles(){
        return view('dashboard\profiles\index',[
            'title' => 'Profil'
        ]);
    }
    public function produk(Produk $produk){
        return view('admin\produk',[
            'title' => 'Produk',
            'produk' => $produk
        ]);
    }
}
