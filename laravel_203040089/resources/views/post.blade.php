@extends('layouts.main')

@section('container')
    <article class="mb-4">
        <h2 class="mb-4">{{ $post->title }}</h2>
        
        <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

        {!! $post->body !!}
    </article>

    <a href="/posts" class="text-decoration-none" >Back to Posts</a>
@endsection