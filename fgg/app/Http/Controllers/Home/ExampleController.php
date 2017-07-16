<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class ExampleController extends Controller{
    public function index()
    {
        return view("develop",['tpl'=>'项目案例']);
    }
}

