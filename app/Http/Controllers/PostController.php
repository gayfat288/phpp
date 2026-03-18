<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->where('id' '=', '3')->orWhere('age', '=', 20)->first();
        return view('users', ['users' => $user]);
    }
}