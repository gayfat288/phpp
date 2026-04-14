<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form()
    {
        return view('form.show');
    }

    public function result(Request $request)
    {
        $num = [$request->input('number1'), $request->input('number2'), $request->input('number2')];
        var_dump($num);
        return view('form.result');
    }
}