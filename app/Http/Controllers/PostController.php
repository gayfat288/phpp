<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;

class PostController extends Controller
{
    public function getAll()
    {
       $posts = Posts::all();
       return view('posts.show', ['posts'=>$posts]);
    }

    public function getOne($id)
    {
        $post = Posts::find($id);
        return view('posts.id', ['post'=>$post]);
    }
}