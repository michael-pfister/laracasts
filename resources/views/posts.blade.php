<x-layout>
    @foreach ($posts as $post)
        <article>
            <h1>{{ $post->title }}</h1>
            <span>{{ $post->excerpt }}</span>
            <br/>
            <br/>
            <a href="{{ $post->slug }}">Go To Post</a>
        </article>
    @endforeach
</x-layout>
