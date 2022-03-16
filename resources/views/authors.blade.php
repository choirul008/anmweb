@extends('layouts.main')

@section('container')

<h1 class="mb-5"> Post {{ $title }} </h1>

@foreach ($Authors as $author)
<li>
    <ul>
    <h2> <a href="/authors/{{ $author>email }}" class="text-decoration-none">{{ $post->user->name  }} </a> </h2>
    </ul>
</li>
@endforeach

<a href="/posts">Kembali ke Halaman Post ajah </a>
@endsection