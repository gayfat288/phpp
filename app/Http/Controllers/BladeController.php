<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function show() {
        return view('post.show', ['name'=>'ivan', 'age'=>'27', 'salary'=>'600', 'class'=>'class', 'name1'=>'evgeni', 'age1'=>'38', 'salary1'=>'1000', 'style'=>'color:red', 'text'=>'text', 'href'=>'ok.ru', 'arr'=>['name'=>'artom', 'age'=>34, 'salary'=>852], 'city'=>['Омск'], 'location'=>['country'=>'Польша', 'city'=>'Варшава'], 'year'=> '1952', 'month'=>'12', 'day'=>'30', 'str'=>'<b>text</b>', 'userAge'=>'14', 'numbers'=>[1, 3, 18, 74, 8]]); 
    }
}