<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAll()
    {
        $posts = Post::all();
        return view('post', ['posts'=>$posts]);
    }
}