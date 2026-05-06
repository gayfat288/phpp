<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookiesController extends Controller
{
    public function show(Request $request)
    {
        $counter = $request->cookie('count', 0);
        $counter++;
        $res = response('Страница обновлена '.$counter.' раз');
        $res->withCookie(cookie('count', $counter, 100));
        return $res;
    }
}