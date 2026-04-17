<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MethodController extends Controller
{
    public function show(Request $request)
    {
        $query = $request->fullUrlWithQuery(['page'=> 1]);
        return view('method.show', ['query'=>$query]);
    }
}
