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

    public function result(Request $request, $name)
    {
        $name = $request->input('name');
        return view('form.result', ['name'=>$name]);
    }
}