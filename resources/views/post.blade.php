@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-1">{{ $post->title }}</h1>
                <small class="text-muted">
                    By : <a href="'/posts?author={{ $post->author->name }}" class="text-decoration-none">{{ $post->author->name }}</a>
                    in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a>
                </small>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3"
                alt="{{ $post->category->name }}">
                <article class="my-3">
                    {!! $post->body !!}     
                </article>
                <a href="/posts">Back to posts!</a>        
            </div>
        </div>
    </div>
@endsection