<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->whereNotIn('id', [1, 2, 3, 5]);
        return view('users', ['users' => $id]);
    }
}