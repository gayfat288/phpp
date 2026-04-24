<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function show()
    {
        $par1 = 1;
        $par2 = 2;
        return redirect()->route('goshan', ['par1' => $par1, 'par2' => $par2]);
    }

    public function result()
    {
        $par1 = 1;
        $par2 = 2;
        return view('redirect.result', ['par1'=>$par1, 'par2'=>$par2]);
    }
}