<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAll($order == 'date', $dir == 'desc')
    {
        $posts = Post::orderBy($order, $dir)->all();
        return view('post', ['posts'=>$posts]);
    }

    public function getOne($id)
    {
        $postId = Post::findOrFail($id);
        return view('postId', ['postId'=>$post]);
    }

    public function newPost(Request $request)
    {
        $postt = new Post;

        $postt->name = $request->name;

        $postt->save();

        return view('postt', ['postt'=>$edit]);
    }

    public function updatedPost()
    {
        $post = Post::find(1);
        $post->title = 'new title';
        $post->desc = 'new description';

        $post->save();
    }
}