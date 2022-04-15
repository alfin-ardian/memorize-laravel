@extends('layouts.main')

@section('container')
        <h1 class="mb-5">{{ $post->title }}</h1 >
            <p> Oleh : <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name ?  $post->author->name : '-' }}</a>,
                with tags : <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        <p>{!! $post->body !!}</p>
    <a href="/post" class="text-decoration-none">Kembali</a>
@endsection
