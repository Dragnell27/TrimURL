<?php

namespace App\Http\Controllers;

use App\Models\UrlModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class UrlController extends Controller
{
    function redirect($shortUrl){
        $url = UrlModel::where('short_url', $shortUrl)->first();
        // dd($url->original_url);
        return redirect($url->original_url);
    }

    function createUrl(Request $request){

        $validator = Validator::make($request->all(), [
            'urlOrigin' => 'required|url', // Valida que 'website' sea una URL válida
        ]);

        if ($validator->fails()) {
            return redirect(route('home'))
                ->withErrors($validator)
                ->withInput();
        }

        $shortUrl = Str::random(6);
        $user_id = 0;
        if(Auth::check()){
            $user_id = Auth::user()->id;
        }

        $url = UrlModel::create([
            'original_url' => $request->urlOrigin,
            'short_url' => $shortUrl,
            'user_id' => $user_id,
        ]);

        $url->save();

        return redirect(route(''));
    }
}
