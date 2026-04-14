<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form(Request $request)
    {
        if($request->isMethod('get')) {
            return view('form.show');
        }

        if(request->isMethod('post')) {
            $text = $request->input('text');
            return view('form.result', ['text', $text]);
        }
    }
}