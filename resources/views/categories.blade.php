@extends('layouts.main')

@section('container')

<h1 class="mb-5"> Categories </h1>
    <div class="container">
        <div class="row">
@foreach ($categories as $category)
<div class="col-md-4">
    <div class="card bg-dark text-white">
    <ul>
    <a href="/posts?category={{ $category->slug }}" class="text-decoration-none" class="card-img" alt="{{ $category->name  }}"> 
    <img src="https://source.unsplash.com/400x300?,coding, programming">
        <li>
        <h2>  </h2>
        <div class="card bg-dark text-white">
        </li>
        </ul>
        <div class="card-img-overlay d-flex align-items-center p-0">
        <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">{{ $category->name }}</h5>
</div>
</div>
</a> 
</div>
@endforeach
</div>
</div>
<a href="/posts">Kembali ke Halaman Post</a>
@endsection