@extends('layouts.main')

@section('container')
    <article class="mb-4">
        <h2 class="mb-4">{{ $post->title }}</h2>
    
        {!! $post->body !!}
    </article>

    <a href="/posts/" >Back to Posts</a>
@endsection