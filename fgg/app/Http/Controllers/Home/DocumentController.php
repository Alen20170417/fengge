<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class DocumentController extends Controller{
    public function index()
    {
        return view("develop",['tpl'=>'资料专区']);
    }
    
    public function download()
    {
        return view("develop",['tpl'=>'资料专区']);
    }
    
    public function share()
    {
        return view("develop",['tpl'=>'资料or技术分享']);
    }
}

