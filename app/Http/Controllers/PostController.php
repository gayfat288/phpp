<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostController extends Controller
{
    public function show()
    {
        $allUsers = Users::all();
        return view('allUsers', ['allUsers' = $users]);
    }

    public function userCity()
    {
        $user = Cities::find(1)->user;
    }
}