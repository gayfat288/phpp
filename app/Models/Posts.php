<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts2';
    public $timestamps = false;
    protected $dateFormat = 'U';
}
