<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

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

    public function newPost(Request $request, $id)
    {
        $postt = Post::find($id);

        if ($request->has('submit')) {
            $postt->title = $request->title;
            $postt->desc = $request->desc;
            $postt->date = $request->date;
            $postt->text = $request->text;

            $post->save();

            return redirect()->to('post/all')->with('upd', 'id'=>$request->id, 'title'=>$request->title);
        }
        return view('test.newPost', ['postt' => $postt]);
    }

    public function updatedPost()
    {
        $post = Post::find(1);
        $post->title = 'new title';
        $post->desc = 'new description';

        $post->save();
    }

    public function firstOr() {
        $post = App\Post::firstOrCreate(['name'=>'namee']);

        $post = App\Post::firstOrNew(['name'=>'namee']);
    }
}