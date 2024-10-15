<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Qurancontroller extends Controller
{
    public function index() {
        $response = Http::get('https://raw.githubusercontent.com/penggguna/QuranJSON/master/quran.json'); 

        // return $response->json();

        // return view('quran.show');

        return view('quran.show', [
            'response' => json_decode($response),
        ]);

    }

    public function indexid($id) {
        $response = Http::get("https://raw.githubusercontent.com/penggguna/QuranJSON/master/surah/$id.json"); 

        // return $response->json();

        return view('quran.indexid', [
            'response' => json_decode($response),
        ]);
    }
}
