<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostController extends Controller
{
    public function show()
    {
        $comment = App\Comment::find(1);
        $comment->text = 'Edit to this comment!';
        $comment->save();
        //остальыне коммиты в лаб 14 блин
    }
}