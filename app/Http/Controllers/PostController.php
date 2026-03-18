<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->where('age', '=', 30)->increment('salary', 100);
        dump($users);
        return view('users', ['users' => $user]);
    }
}