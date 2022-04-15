@extends('layouts.main')

@section('container')
    <h4 class="mb-5">Post Category : {{ $category }}</h3>

    @foreach ($posts as $post)

    <article class="mb-5 border-bottom pb-4">
        <h2>
            <a id="post" href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
        </h2>
        <p> Oleh : <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name ?  $post->author->name : '-' }}</a>,
            with tags : <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>
        <a href="/categories" class="text-decoration-none">Kembali ke list</a>
    </article>

    @endforeach
@endsection
