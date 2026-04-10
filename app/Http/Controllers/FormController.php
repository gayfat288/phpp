<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form(Request $request)
    {
        if ($request->has('number1', 'number2')) {
            $num1 = $request->input('number1');
            $num2 = $request->input('number2');
            echo ('Сумма чисел: ');
            var_dump($num1 + $num2);
        }
        return view('form.show');
    }
}