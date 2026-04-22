<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function show(Request $request) {
        session(['test'=>'test1']);
        $value = session('test');
        return view('session.show', ['value'=>$value]);
    }
}