<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->whereBetween('age', [30, 40]);
        return view('users', ['users' => $age]);
    }
}