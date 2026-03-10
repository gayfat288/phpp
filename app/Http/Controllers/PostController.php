<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show()
    {
        return view('test', ['var1'=> '1', 'var2'=>'2'], ['title'=> 'page title', 'text'=>'page content']);
    }

    public function namesurname() {
        return view(['name'=>'ivan', 'surname'=>'ivanov']);
    }
}
