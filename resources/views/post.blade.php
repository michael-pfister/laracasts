<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>
        <span>{{ $post->excerpt }}</span>
        <p>{{ $post->body }}</p>
        <br />
        <a href="/posts">Go Back To Posts</a>
    </article>
</x-layout>
