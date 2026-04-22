<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function show(Request $request)
    {
        if ($request->has('num')) {
            $num = $request->input('num');

            if ($num >= 0 and $num <= 10) {
                return redirect('redirect/result')->withInput();
            }

            else {
                return view('redirect.show');
            }
        }
        
        else {
            return view('redirect.show');
        }
    }

    public function result(Request $request)
    {
        return $request->input('num');
    }
}