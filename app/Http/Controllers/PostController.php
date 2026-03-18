<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->take(3)->where('age', '=', 30)->get();
        dump($users);
        return view('users', ['users' => $user]);
    }
}