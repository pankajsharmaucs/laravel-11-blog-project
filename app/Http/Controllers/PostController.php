<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Services\PostService;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\URL;

class PostController extends Controller {
    protected $postServiceData;

    public function __construct( PostService $postServiceData ) {
        $this->postService = $postServiceData;
    }

    // Display a listing of the resource

    public function index() {
        // $posts = Post::all();
        $posts = $this->postService->getAllPost();
        return view( 'posts.index', compact( 'posts' ) );
    }

    // Show the form for creating a new resource

    public function create() {
        return view( 'posts.create' );
    }

    // Store a newly created resource in storage

    public function store( PostRequest $request ) {
        $validated = $request->validated();

        $posts = $this->postService->createPost( $validated );
        return redirect()->route( 'posts.index' );
    }

    // Display the specified resource

    public function show( $id ) {
        // $fullUrl = url()->full();
        // $currentUrl = url()->current();
        // $currentUrl = URL::current();
        // $url = URL::temporarySignedRoute('posts.show', now()->addMinutes(30), ['id' => 1]);
        // $url = URL::temporarySignedRoute('posts.show', now()->addMinutes(30), ['post' => $id]);

        // $url = route('posts.index', ['category' => 'technology', 'page' => 2]);
        // $url = mix('css/app.css');
        
        // var_dump($url); die();

        $post = $this->postService->showPostById( $id );
        return view( 'posts.show', compact( 'post' ) );
    }

    // Show the form for editing the specified resource

    public function edit( $id ) {
        $post = $this->postService->showPostById( $id );
        return view( 'posts.edit', compact( 'post' ) );
    }

    // Update the specified resource in storage

    public function update( PostRequest $request, $id ) {
        $validated = $request->validated();
        $post = $this->postService->updatePostById( $validated, $id );
        return redirect()->route( 'posts.index' );
    }

    // Remove the specified resource from storage

    public function destroy( $id ) {
        $post = $this->postService->deletePostById( $id );
        return redirect()->route( 'posts.index' );
    }

}
