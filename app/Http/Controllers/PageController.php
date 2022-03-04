<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }

    public function about(){
        echo "NIM   : 2041720014";
        echo "Nama  : Halda Dini Silma Rosida";
        echo "Kelas : TI-2C";
    }

    public function articles($id){
        echo "ini merupakan halaman artikel dengan ID" . $id;
    }
}