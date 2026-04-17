<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function show(Request $request) {
        $request->session()->put('a', '1');
        $request->session()->put('b', '2');
        $request->session()->put('c', '3');
        $request->session()->put('d', '4');

        $data = $request->session()->all();
        var_dump($data);
        return view('session.show');
    }
}