<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;

class PostController extends Controller
{
    public function getAll($order='date', $dir='desc')
    {
       $posts = Posts::orderBy($order, $dir)->get();
       return view('posts.show', ['posts'=>$posts]);
    }

    public function getOne($id)
    {
        $post = Posts::findOrFail($id);
        return view('posts.id', ['post'=>$post]);
    }
}