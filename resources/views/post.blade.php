@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2>{{ $title }}</h2>
                <br>
                <h3>
                    <h1 class="mb-3">{{ $post->title }}</h1>
                </h3>
                <h5>By : <a href="/authors/{{ $post->user->username }}" class="text-decoration-none" > {{ $post->user->name }} </a></h5>
                <h4>Kategori : <a href="#" class="text-decoration-none">{{ $post->category->name }}</a></h4>
                <img src="https://source.unsplash.com/1200x400? {{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/posts"> Back </a>
            </div>
        </div>
    </div>



@endsection
