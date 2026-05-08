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

        if($request->isMethod('post')) {
            $num1 = $request->input('num1');
            $num2 = $request->input('num2');
            $sum = $num1 + $num2;
            echo 'Сумма введенных чисел: '.$sum;
            return view('form.show');
        }
    }
}