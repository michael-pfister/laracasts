<x-layout>
    @foreach ($posts as $post)
        <article>
            <h1>{{ $post->title }} : {{ $post->category->name }}</h1>
            <p>{{ $post->excerpt }}</p>
            <br/>
            <br/>
            <a href="{{ $post->slug }}">Go To Post</a>
        </article>
    @endforeach
</x-layout>
