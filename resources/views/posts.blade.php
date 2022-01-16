@extends('layouts.main')
@section('container')
<h1 class="mb-3">{{ $title }}</h1>
<br>
@if($posts->count())
    <div class="card mb-3">
        <div class="position-absolute bg-black px-3 py-2 text-white" style="background-color:white"><a href="/categories/{{ $posts[0]->category->slug }}" class="text-white text-decoration-none">{{ $posts[0]->category->name }}</a></div>
        <img src="https://source.unsplash.com/1200x400? {{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        <div class="card-body text-center">
            <h3>
                <a href="{{ route('posts.show',['post' => $posts[0]->slug]) }}" class="text-decoration-none">{{ $posts[0]->title }}</a>
            </h3>
            <h15 class="card-text"><small class="text-muted">• {{ $posts[0]->created_at->diffForHumans() }}</small></h15>
            <br>
            <h10>
                By : <a href="/authors/{{ $posts[0]->user->username }}" class="text-decoration-none" > {{ $posts[0]->user->name }} </a>
            </h10>
            <br>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>

            <a href="{{ route('posts.show',['post' => $posts[0]->slug]) }}" class="text-decoration-none btn btn-primary">Read more</a>
    </div>
    </div>
@else
    <p class="text-center fs-4">Post not found</p>
@endif

<div class="container">
    <div class="row">
        @foreach($posts->skip(1) as $post)
{{--            <style>--}}
{{--                div a. {--}}
{{--                    height: auto;--}}
{{--                }--}}
{{--            </style>--}}
{{--        <div class="a">--}}
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute bg-black px-3 py-2 text-white" style="background-color:white"><a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                <img src="https://source.unsplash.com/500x400? {{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                <div class="card-body">
                    <h3>
                        <a href="{{ route('posts.show',['post' => $post->slug]) }}" class="text-decoration-none">{{ $post->title }}</a>
                    </h3>
                    <h15 class="card-text"><small class="text-muted">• {{ $posts[0]->created_at->diffForHumans() }}</small></h15>
                    <br>
                    <h10>
                        By : <a href="/authors/{{ $post->user->username }}" class="text-decoration-none" > {{ $post->user->name }} </a>
                    </h10>
                    <br>
                    <p class="card-text">{{ $post->excerpt }}</p>

                    <a ref="{{ route('posts.show',['post' => $post->slug]) }}"  class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

