<?php
namespace app\Http\Controllers;

class UserController extends Controller
{
    public function show() {
        return view ('hello world', ['a'=>'1', 'b'=>'2']);
    }

    public function all() {
        return 'all';
    }

    public function name() {
        return 'hi';
    }

    public function surname() {
        return '111';
    }

    public function method() {
        return view(['aaa'=>'111', 'bbb'=>'222'], ['title'=>'page title', 'text'  => 'page content']);
    }

    public function method2() {
        return view(['ccc'=>'333', 'ddd'=>'444'], ['title2'=>'page title', 'text2'  => 'page content']);
    }

    public function method3() {
        return view(['eee'=>'555', 'fff'=>'666'], ['title3'=>'page title', 'text3'  => 'page content']);
    }
}