@extends('layouts.main')

@section('container')

<h1 class="mb-5"> Post {{ $title }} (author.blade) </h1>

@foreach ($User as $user)
<li>
    <ul>
    <h2> <a href="/author/{{ $user->user->username }}" class="text-decoration-none">{{ $user->user->name  }} </a> </h2>
    </ul>
</li>

@endforeach

<a href="/posts">Kembali ke Halaman Post</a>
@endsection