<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->where('id' '=', '3')->where('age', '=', 20)->get();
        return view('users', ['users' => $user]);
    }
}