<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashController extends Controller
{
    public function show(Request $request)
    {
        $request->session()->flash('flash', 'Флэш-сообщение');
    }
}
