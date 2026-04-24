<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function show(Request $request)
    {
        $request->session()->put('email', 'alesha44@gmail.com');
        $right_email = $request->session()->get('email');

        if ($request->has('email')) {
            $email = $request->input('email');

            if ($email == $right_email) {
                return redirect('redirect/result');
            }

            else {
                $warning = 'Введен некорректный email';
                echo $warning;
                return view('redirect.show');
            }
        }
        
        else {
            return view('redirect.show');
        }
    }

    public function result(Request $request)
    {
        $right_email = $request->session()->get('email');
        echo $right_email;
        ?>
        <br><br>
        <?php
        return 'email корректный';
    }
}