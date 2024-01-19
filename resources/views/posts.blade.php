@props(['posts', 'categories', 'currentCategory' => null])

<x-layout>
    <x-posts-header :categories="$categories" :currentCategory="$currentCategory"/>

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts"/>
        @else
            <p>No Posts Found...</p>
        @endif
    </main>
</x-layout>