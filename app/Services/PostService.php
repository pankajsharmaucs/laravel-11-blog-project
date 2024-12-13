<?php

namespace App\Services;

use App\Models\Post;

class PostService {

    public function getAllPost() {
        return Post::all();
    }

    public function createPost( $data ) {
        return Post::create( $data );

    }

    public function showPostById( $id ) {
        return Post::findOrFail( $id );
    }

    public function updatePostById( $request, $id ) {
        $post = Post::findOrFail( $id );
        try {
            $post->update( $request );
            return $post;
        } catch ( \Exception $e ) {
            return response()->json( [ 'error' => 'Update failed', 'message' => $e->getMessage() ], 400 );
        }
    }

    public function deletePostById( $id ) {
        $post = Post::findOrFail( $id );
        try {
            $post->delete();
            return $post;
        } catch ( \Exception $e ) {
            return response()->json( [ 'error' => 'Delete failed', 'message' => $e->getMessage() ], 400 );
        }
    }

}