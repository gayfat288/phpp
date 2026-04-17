<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function show(Request $request) {
        $request->session()->put('arr', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        $request->session()->put('arr2', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        $request->session()->forget('arr');
        return view ('session.show');
    }
}