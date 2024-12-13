<!-- resources/views/posts/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Ticket</title>
</head>
<body>
    <h1>Create New Ticket</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        <!-- CSRF Token for security -->
        @csrf 
        
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required><br>
        </div>

        <div>
            <label for="content">Content:</label>
            <textarea name="content" id="content" required></textarea><br>
        </div>

        <button type="submit">Create</button>
    </form>
    <br>
    <a href="{{ route('posts.index') }}">All Data </a>
</body>
</html>
