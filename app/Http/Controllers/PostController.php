<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostController extends Controller
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function soft() {
        Schema::table('posts', function ($table) {
        $table->softdeletes();
        });
    }   

    public function getAll($order = 'date', $dir ='desc')
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

    public function delPost(Request $requestt, $id)
    {
        $delPost = Post::find($id);

        if($requestt->has('submit')) {
            $delPost->delete();

            return redirect()->to('post/all')->with('del', 'title'=>$request->title)->with('success', 'Статья удалена');
        }

        return view('delPost', ['delPost' => $delete]);
    }

    public function getDeletedPost()
    {
        if($post->trashed()) {
            return view('post', ['post' => $deleted]);
        }
    }

    public function restorePost() {

    }
}