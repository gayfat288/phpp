<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->orderBy('salary', 'desc')->get();
        return view('users', ['users' => $user]);
    }
}