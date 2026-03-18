<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->insert([
            'name'=>'arthur',
            'age'=>40,
            'salary'=>700,
            'email'=>'arthur@mail.com'
        ]);
        dump($users);
        return view('users', ['users' => $user]);
    }
}