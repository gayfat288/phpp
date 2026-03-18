<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->where('age', '>', 20)->where('age', '<', 30)->InRandomOrder()->get();
        dump($users);
        return view('users', ['users' => $user]);
    }
}