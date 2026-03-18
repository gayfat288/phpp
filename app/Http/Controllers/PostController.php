<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->where('id', '=', 5)->delete();
        dump($users);
        return view('users', ['users' => $user]);
    }
}