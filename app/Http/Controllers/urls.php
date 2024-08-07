<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class urls extends Controller
{
    function redirect($shortUrl){

        return view('index', compact('shortUrl'));
    }
}
