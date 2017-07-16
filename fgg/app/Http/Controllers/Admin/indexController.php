<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class  IndexController extends Controller{
    
    public function index(){
        
    }
    
    public function login(){
        echo  'i am admin login';
    }
    
    public function logout(){
        
    }
}
