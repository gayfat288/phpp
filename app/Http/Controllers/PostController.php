<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostController extends Controller
{
    public function show()
    {
        $user = App\User::find(1);

        $user->roles()->syncwithoutDetaching([1, 2, 3]);
    }
}