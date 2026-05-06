<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookiesController extends Controller
{
    public function show(Request $request)
    {
        $lastVisit = $request->cookie('last_visit');
        if($lastVisit) {
            $seconds = time() - $lastVisit;
            $resp = 'С прошлого захода на страницу прошло '.$seconds.' секунд';
        }
        else {
            $resp = 'Первый заход на страницу';
        }
        return response($resp)->cookie('last_visit', time(), 525600);
    }
}