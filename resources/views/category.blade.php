@extends('layouts.main')

@section('container')

<h1 class="mb-5"> Post Category : {{ $category }} </h1>

@foreach ($posts as $post)
    <article class="mb-5">
    <h2> <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title  }} </a> </h2>
    <h5>By :{{ $post->user->name }} in {{ $post->category->name }} </h5>
    <p>{{ $post->excerpt }} </p>
    </article>
@endforeach

<a href="/posts">Kembali ke Halaman Post</a>
@endsection