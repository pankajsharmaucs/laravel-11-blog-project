<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestApi extends Controller
{
    public function index()
        {
            
                return response()->json([
                    'message' => 'API hit received!',
                ]);

        }
}
