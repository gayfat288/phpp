<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostController extends Controller
{
    public function show()
    {
        $post = App\Post::find(1);

        $comment = $post->comments()->create([
            'message' => 'A new comment',
        ]);
    }
}