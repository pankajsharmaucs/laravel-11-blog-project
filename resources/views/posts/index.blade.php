<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Tickets</title>
</head>

<body>
    <a href="{{ route('posts.create') }}">Add New</a>
    @if (count($posts) > 0)
        <ul>
            @foreach ($posts as $post)
                <li style="border:2px solid #444; padding:10px;">
                    <h3>{{ $post->title }}</h3> <!-- Display post title -->
                    <p>{{ $post->content }}</p> <!-- Display post content -->
                    <a href="{{ route('posts.show', $post->id) }}">View</a> <!-- Link to view post details -->
                    <form style="margin:10px 0px;" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <h2>Data not Found</h2>
        @endif


</body>

</html>
