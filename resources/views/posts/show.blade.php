<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post - {{ $post->title }}</title>
</head>

<body>
    <!-- Form to edit the post -->
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Ensure the correct HTTP method is used for updating -->

        <h1>Edit Post: {{ $post->title }}</h1>

        <!-- Title Input -->
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}" id="title" required>
            @error('title') <!-- Display validation error for title -->
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <!-- Content Input -->
        <div>
            <label for="content">Content:</label>
            <textarea name="content" id="content" required>{{ old('content', $post->content) }}</textarea>
            @error('content') <!-- Display validation error for content -->
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit">Update Post</button>
    </form>
    <br>
    <a href="{{ route('posts.index') }}">Back</a>

</body>

</html>
