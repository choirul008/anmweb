@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
        <h1 class="mb-5"> {{ $post->title }} </h1>
        <p> By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a> </p> 
        @if ($post->image)
        <div style="max-height: 350px; overflow:hidden">
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->author->username }}" class="img-fluid">
        </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->author->username }},coding, programming" alt="{{ $post->user->username }}" class="img-fluid">
        @endif

<article class="my-3 fs-4">
    {!! $post->body !!}

</article>   
    <a href="/posts" class="d-block mt-3">Kembali ke Halaman Post</a>
        </div>

    </div>

</div>
    
@endsection
