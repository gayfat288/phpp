<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function put(Request $request) {
        $request->session()->put('key', 'value');
    }

    public function get(Request $request) {
        $value = $request->session()->get('key');
        return view('session.get', ['value'=>$value]);
    }
}
