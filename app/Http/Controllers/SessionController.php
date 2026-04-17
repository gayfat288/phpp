<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function put(Request $request) {
        $value = $request->session()->put('key', 1);
        return view('session.show');
    }

    public function get(Request $request) {
        $val = $request->session()->pull('key');
        return view('session.get', ['val' => $val]);
    }
}