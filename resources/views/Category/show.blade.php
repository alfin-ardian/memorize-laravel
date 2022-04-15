@extends('layouts.main')

@section('container')
    <h4 class="mb-5">Post Category : {{ $category }}</h3>

        @if ($posts->count())

        <div class="card mb-5">
            <div class="card-body">
            <h2 class="card-title">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
                <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark"> {{ $posts[0]->title }} </a>
            </h2>
            <p>oleh <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name ?  $posts[0]->author->name : '-' }}</a>
                in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                <small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small>
            </p>

            <p class="card-text"> <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->excerpt }}</a>...</p>
            </div>
        </div>
      @else
        <div class="alert alert-info">
            <strong>No posts found</strong>
        </div>
      @endif

    @foreach ($posts->skip(1) as $post)

    <article class="mb-5 border-bottom pb-4">
        <h2>
            <a id="post" href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
        </h2>
        <p> Oleh : <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name ?  $post->author->name : '-' }}</a>,
            with tags : <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>
        <a href="/categories" class="text-decoration-none">Kembali ke kategori</a>
    </article>

    @endforeach
@endsection
