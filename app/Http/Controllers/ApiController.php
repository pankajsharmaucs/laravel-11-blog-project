<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    // Apply throttle middleware to this specific method (60 requests per minute)
    public function getData(Request $request)
    {
        return response()->json([
            'message' => 'This route is limited to 60 requests per minute for guests.',
            'status' => 'success',
        ]);
    }

    // Apply throttle middleware to another method (100 requests per minute)
    public function getUserData(Request $request)
    {
        return response()->json([
            'message' => 'This route is limited to 100 requests per minute for authenticated users.',
            'status' => 'success',
        ]);
    }
}
