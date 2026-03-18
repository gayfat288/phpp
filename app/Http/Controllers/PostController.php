<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->where('email' '=', 'john@mail.com')->first();
        return view('users', ['users' => $johnMail]);
    }
}