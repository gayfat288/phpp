<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostController extends Controller
{
    public function show()
    {
        $allUsers = Users::all()->profile;
        return view('allUsers', ['allUsers' = $users]);
    }

    public function userCity()
    {
        $user = Cities::all()->user;
        return view('user', ['user' = $users]);
    }
}