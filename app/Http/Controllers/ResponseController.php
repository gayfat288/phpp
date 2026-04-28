<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function show()
    {
        return response ('Hello', 200)->withHeaders([
            'Content-Type' => 'text/plain',
            'X-Header-One' => 'Header Value',
			'X-Header-Two' => 'Header Value',
        ]);
    }
}