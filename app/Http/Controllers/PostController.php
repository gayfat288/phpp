<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->where('id', '=', 5)->update([
            ['name'=>'asher',
            'age'=>34,
            'salary'=>800,
            'email'=>'asher@mail.com']
        ]);
        dump($users);
        return view('users', ['users' => $user]);
    }
}