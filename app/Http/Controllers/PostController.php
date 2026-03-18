<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $query = DB::table('posts')->where('id', '!=', 3)->toSql();
        dump($query);
    }
}