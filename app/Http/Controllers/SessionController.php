<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function show(Request $request) {
        $current_time = date('H:i:s');
        $time = $request->session()->get('time', $current_time);
        echo $time;
        $request->session()->put('time', $current_time);
        return view('session.show');
    }
}