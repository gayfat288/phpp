<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->insert([
            ['name'=>'miles',
            'age'=>27,
            'salary'=>500,
            'email'=>'miles@mail.com'],

            ['name'=>'owen',
            'age'=>24,
            'salary'=>600,
            'email'=>'owen@mail.com'],

            ['name'=>'leo',
            'age'=>30,
            'salary'=>1000,
            'email'=>'leo@mail.com']
        ]);
        dump($users);
        return view('users', ['users' => $user]);
    }
}