@extends('layouts.main')

@section('container')
    <article class="mb-4">
        <h2 class="mb-4">{{ $post->title }}</h2>
        
        <p>By. Bahrul ulum in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        {!! $post->body !!}
    </article>

    <a href="/posts" >Back to Posts</a>
@endsection