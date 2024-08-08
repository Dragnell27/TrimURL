<?php

namespace App\Http\Controllers;

use App\Models\UrlModel;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    function redirect($shortUrl){

        return view('index', compact('shortUrl'));
    }

    function createUrl(Request $request){
        $request->validate([
            'urlOrigin' => ['required|url']
        ]);

        $shortUrl = ;

        $url = UrlModel::create([
            'email' => $request->urlOrigin,
            'password' => bcrypt($request->password)]);
    }
}
