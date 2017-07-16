<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class CommunicateController extends Controller{
    public function index()
    {
        return view("communicate",['tpl'=>'技术交流']);
    }
}