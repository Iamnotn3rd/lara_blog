<!DOCTYPE html>

<html lang="en">

<head>
    <title>Blog</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap" rel="stylesheet">
</head>

<body>
    <article>
        <h2>{{ $post->title }}</h2>
        <p>Category - {{ $post->category->name }}</p>
        <p>Author - {{ $post->author->name }}</p>
        <hr>
        <p>{{ $post->body }}</p>
        <a href="/">Go Back</a>
    </article>
</body>

</html>