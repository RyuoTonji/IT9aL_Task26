<!DOCTYPE html>
<html>
<head>
    <title>Post Details</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
    </div>
</body>
</html>
