<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookiesController extends Controller
{
    public function show(Request $request)
    {
        if(isMethod('get')) {
            return view('cookies.show');
        }

        if(isMethod('post')) {
            $bd = $request->input('birthday');
            $cookie = cookie('userbd', $bd);
            $today = date('m-d');
            $user_bd = date('m-d', strtotime($cookie));
            $resp = null;

            if($today === $userbd) {
                $resp = response('С днём рождения');
            }
            else {
                $resp = response('у тя не др');
            }

            return response($resp);
        }
    }
}