<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function show(Request $request) {
        $request->session()->put('arr', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        $arr = $request->session()->get('arr');
        var_dump($arr);
        $request->session()->push('arr', 19);
        $arr_upd = $request->session()->get('arr');
        var_dump($arr_upd);
        return view ('session.show');
    }
}