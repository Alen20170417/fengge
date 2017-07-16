<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class FggController extends Controller{
    public function index()
    {
        return view("home.fgg.fgg",['tpl'=>'峰の格']);
    }
    
    public function ufgg()
    {
        return view("home.fgg.fgg",['tpl'=>'Yours峰の格']);
    }
}

