@extends('layouts.main')

@section('container')
    <article class="mb-5">
        @foreach ($posts as $post)
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                {{-- <a href="/posts/{{ $post['id'] }}">{{ $post['title'] }}</a> --}}
            </h2>
            <p>{{ $post->excerpt }}</p>
            {{-- <p>{{ $post['body'] }}</p> --}}
        @endforeach
    </article>
@endsection
