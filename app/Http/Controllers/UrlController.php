<?php

namespace App\Http\Controllers;

use App\Models\UrlModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class UrlController extends Controller
{
    function redirect($shortUrl){
        $url = UrlModel::where('short_url', $shortUrl)->first();
        return redirect($url->original_url);
        if ($url) {
            // Redirige al enlace original
            return redirect()->to($url->original_url);
        } else {
            // Loguea el error para auditoría
            Log::error("Enlace corto no encontrado: " . $shortCode);

            // Redirige a la página de error 500
            abort(500, 'El enlace solicitado no existe.');
        }
    }

    function createUrl(Request $request){

        $validator = Validator::make($request->all(), [
            'urlOrigin' => 'required|url', // Valida que 'website' sea una URL válida
        ]);

        if ($validator->fails()) {
            return response()->json([
                    'status' => 400,
                    'message' => "Error al validar la URL",
                    'url' => ''
                ]);
        }

        $shortUrl = Str::random(6);
        $user_id = $request->user_id ? $request->user_id : null;
        $url = UrlModel::create([
            'original_url' => $request->urlOrigin,
            'short_url' => $shortUrl,
            'user_id' => $user_id,
        ]);

        $url->save();

        return response()->json([
                'status' => 200,
                'message' => "Se guardo la url",
                'url' => $shortUrl
            ]);
    }
}
