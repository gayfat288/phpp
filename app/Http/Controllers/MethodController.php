<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MethodController extends Controller
{
    public function show(Request $request)
    {
        $uri = $request->path();
        $url = $request->url();
        $full = $request->fullUrl();
        $methods = [$uri, $url, $full];
        return view('method.show', ['methods'=>$methods]);
    }
}
