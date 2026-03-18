<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        DB::enableQueryLog();
        DB::table('posts')->where('id', '!=', 3)->get();
        dump(Db::getQueryLog());
    }
}