<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function show(Request $request) {
        $value = $request->session()->get('counter', 1);
        echo $value;
        $request->session()->put('counter', $value + 1);
        return view('session.show');
    }
}