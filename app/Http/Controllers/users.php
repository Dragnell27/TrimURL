<?php

namespace App\Http\Controllers;

use App\Models\User as user;
use Illuminate\Http\Request;

class users extends Controller
{
    function showLogin(){
        return view('auth.login');
    }

    function showRegister(){
        return view('auth.register');
    }

}
