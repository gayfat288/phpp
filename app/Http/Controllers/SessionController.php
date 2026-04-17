<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function show(Request $request) {
        $request->session()->put('test', 'test');

        if ($request->session()->has('test')) {
            $val = $request->session()->get('test');
            echo($val);
        }
        else {
            $request->session()->put('test', 'test');
        }
        return view('session.show');
    }
}