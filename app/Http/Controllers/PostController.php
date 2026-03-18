<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->where('salary', '=', 500)->orWhere('age', '>', 20)->where('age', '<', 30)->get();
    }
}