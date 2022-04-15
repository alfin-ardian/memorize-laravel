@extends('layouts.main')

@section('container')
<div class="container mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mb-3">
            <h1>{{ $post->title }}</h1 >
                <small class="text-muted"> Oleh <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name ?  $post->author->name : '-' }}</a>
                    in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
                    - {{ $post->created_at->diffForHumans() }}
                </small>
            </div>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
            <p class="text-justify">{!! $post->body !!}</p>
            <a href="/post" class="text-decoration-none">Kembali</a>
        </div>
    </div>
</div>

@endsection
