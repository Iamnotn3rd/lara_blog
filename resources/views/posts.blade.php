<x-layout>
    <x-slot name="banner">
        <h1>Blog Posts</h1>
    </x-slot>

    <x-slot name="content">
        @foreach ($posts as $post)
        <article>
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <p>Category - <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>Author - <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a></p>
            <hr>
            <p>{{ $post->excerpt }}</p>
        </article>
        @endforeach
    </x-slot>
</x-layout>