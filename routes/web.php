<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Middleware\AdminCheck; 
use App\Facades\LogFacade;
use App\Models\Product;

#home
Route::get('/', function () {
    // Using the custom facade to log a message
    // LogFacade::logMessage('This is a custom log message from the route Facades!');
    // return response()->json(['message' => 'Log has been recorded!']);
    $products =Product::all();
    return view('home', compact('products'));
})->name('home');

#redirect
// Route::redirect('/', '/admin');

#admin group 
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('dashboard')->middleware(AdminCheck::class);
});



#about
Route::get('/about/{id?}', function ($id=null) {
    return view('about',compact('id'));
})->name('about');

#posts
Route::resource('posts', PostController::class);

# Controller Namespacing and Resource Routes
// Route::prefix('admin')
//     ->middleware('auth')
//     ->group(function () {
//         Route::resource('posts', PostController::class);  // Handles the basic CRUD routes
//     });

#User 
Route::get("/dashboard",[UserController::class, 'index']);

#not found
Route::fallback(function () {
    return  view('errors');
});

// Nested Group
// Route::prefix('admin')
//     ->name('admin.')
//     ->middleware('auth')
//     ->group(function () {
//         Route::prefix('posts')
//             ->name('posts.')
//             ->group(function () {
//                 Route::get('/', [PostController::class, 'index'])->name('index');
//                 Route::get('/{post}', [PostController::class, 'show'])->name('show');
//             });

//         Route::prefix('users')
//             ->name('users.')
//             ->group(function () {
//                 Route::get('/', [UserController::class, 'index'])->name('index');
//                 Route::get('/{user}', [UserController::class, 'show'])->name('show');
//             });
//     });

// Domain Prefix
// Route::domain('www.google.com')
//     ->name('admin.')
//     ->group(function () {
//     Route::get('/', [AdminAuthController::class, 'showLoginForm'])->name('login');
//     Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
//     Route::post('/login', [AdminAuthController::class, 'login']);
//     Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
//     Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('dashboard')->middleware(AdminCheck::class);
// });