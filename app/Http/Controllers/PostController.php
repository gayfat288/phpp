<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostController extends Controller
{
    public function show()
    {
        $category = new App\Category(['name'=>'name1']);
        $product = App\Products::find(1);
        $product->comments()->save($category);
    }
}