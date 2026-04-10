<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form(Request $request)
    {
        if ($request->has('number')) {
            $num = $request->input('number');
            echo ('Квадрат введенного числа: ');
            var_dump($num * $num);
        }
        return view('form.show');
    }
}