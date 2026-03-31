<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostController extends Controller
{
    public function usersProfiles()
    {
        $profile = Users::find(1)->profile;
    }
}