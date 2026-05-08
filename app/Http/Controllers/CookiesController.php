<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookiesController extends Controller
{
    public function show(Request $request)
    {
        if ($request->has('birthday')) {
            $input = $request->input('birthday');
            return redirect('/cookies/result')->WithCookie(cookie('birthday', $input, 525600));
        }

        return view('cookies.show');
    }

    public function result(Request $request)
    {
        $bd = $request->cookie('birthday');
        if($bd) {
            $date = date('m-d', strtotime($bd));
            $today = date('m-d');

            if($date == $today) {
                return 'С днем рождения!';
            }
            else if ($date > $today) {
                return 'С наступающим днем рождения!';
            }
            else {
                return 'С прошедшим днем рождения!';
            }
        }
        return view('cookies.result');
    }
}