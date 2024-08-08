<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrlController extends Controller
{
    function redirect($shortUrl){

        return view('index', compact('shortUrl'));
    }
}
