<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function show(Request $request) {
        $count = $request->session()->get('views', 0);
        $count++;
        $request->session()->put('views', $count);
        return view('session.show', ['count'=>$count]);
    }
}