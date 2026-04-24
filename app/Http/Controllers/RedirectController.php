<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function show(Request $request)
    {
        return redirect()->route('goshan');
    }

    public function result()
    {
        return view('redirect.result');
    }
}