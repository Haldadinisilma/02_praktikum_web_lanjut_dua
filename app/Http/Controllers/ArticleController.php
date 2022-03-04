<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles($id){
        echo "ini merupakan halaman artikel dengan ID" . $id;
    }
}
