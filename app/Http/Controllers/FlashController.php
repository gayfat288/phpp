<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashController extends Controller
{
    public function show(Request $request)
    {
        if ($request->has('num1') and $request->has('num2') and $request->has('num3') and $request->has('num4') and $request->has('num5')) {
            $request->flash();
            return redirect('flash/result');
        }
        return view('flash.show');
    }

    public function result(Request $request)
    {
        return $request->old('num1') + $request->old('num2') + $request->old('num3') + $request->old('num4') + $request->old('num5');
    }
}