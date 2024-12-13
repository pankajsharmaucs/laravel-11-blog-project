<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestApi;
use Illuminate\Support\Facades\Http;

// Route::get('test', function(){

    

//     // $response = Http::get('https://www.kreditaid.com');

//     // $response = Http::post('https://www.kreditaid.com', [
//     //     'name' => 'John Doe',
//     //     'email' => 'john@example.com',
//     // ]);

//     // $users = $response->json(); // Automatically converts the JSON response to an array
//     $response = Http::get('https://www.kreditaid.com');
//     // handaling Request
//     if ($response->successful()) {
//         $data = $response->json();
//         // dd($data);
//     } else {
//         // dd('Request failed with status: ' . $response->status());
//     }
//     // dd($response); // Dump and die to inspect the data

//     // sending Header
//     $response = Http::withHeaders([
//         'Authorization' => 'Bearer your-token',
//         'Accept' => 'application/json',
//     ])->get('https://www.kreditaid.com');
    
//     // dd($response->json());

//     // Adding Query Parameters
//     // You can add query parameters to the request URL using the withQueryParams method.
    
//     $response = Http::get('https://api.example.com/users', [
//         'page' => 2,
//         'limit' => 10,
//     ]);

//     // Handling Authentication
//     // The HTTP client supports various methods for handling authentication:
//     // Bearer Token: Use withToken() to add a bearer token.

//     $response = Http::withToken('your-token')->get('https://api.example.com/users');

//     // Basic Authentication: Use withBasicAuth() to send basic authentication credentials.
//     $response = Http::withBasicAuth('username', 'password')->get('https://api.example.com/users');

//     // 6. Retrying Requests
//     $response = Http::retry(3, 100)->get('https://api.example.com/users');

//     // 7. Timeouts
//     // You can set a timeout for your requests using the timeout() method.
//     $response = Http::timeout(5)->get('https://api.example.com/users');

//     // 8. Asynchronous Requests
//     $responses = Http::async()
//         ->get('https://api.example.com/users')
//         ->get('https://api.example.com/posts');

//     // Access responses
//     // dd($responses[0]->json(), $responses[1]->json());

//     // 9. Handling Form Data (POST, PUT, etc.)
//     // You can send form data using the asForm() method when making POST, PUT, or PATCH requests.
//     $response = Http::asForm()->post('https://api.example.com/users', [
//         'name' => 'John Doe',
//         'email' => 'john@example.com',
//     ]);

//     // dd($response->json());

//     // 10. Customizing Request Headers and Body
//     $response = Http::withHeaders([
//         'X-Custom-Header' => 'Value',
//     ])->post('https://api.example.com/endpoint', [
//         'key' => 'value'
//     ]);

//     // 11. Request Lifecycle & Debugging
//     $response = Http::get('https://www.kreditaid.com');
//     dd($response->toArray());

//     // 12. Fake HTTP Responses for Testing
//     Http::fake([
//         'https://api.example.com/users' => Http::response(['name' => 'John'], 200),
//     ]);
    
//     $response = Http::get('https://api.example.com/users');
//     dd($response->json()); // Outputs the mocked response


// });

Route::get('/send', [TestApi::class, 'index'])->middleware(['throttle:2,1']);
Route::get('/report', [TestApi::class, 'index'])->middleware(['throttle:5,1']);