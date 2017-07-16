<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class LifeController extends Controller{
    public function index()
    {
        return view("develop",['tpl'=>'峰の生活']);
    }
}
