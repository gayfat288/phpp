<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAll()
    {
        $posts = Post::orderBy('date', 'desc')->all();
        return view('post', ['posts'=>$posts]);
    }

    public function getOne($id)
    {
        $postId = app\Models\Post::findOrFail($id);
        return view('postId', ['postId'=>$post]);
    }
}