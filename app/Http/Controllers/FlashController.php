<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashController extends Controller
{
    public function show(Request $request)
    {
        $request->session()->flash('flash', 'Флэш-сообщение');
        return redirect('flash/result');
    }

    public function result(Request $request)
    {
        $flash = $request->session()->get('flash');
        return view('flash.result', ['flash'=>$flash]);
    }
}