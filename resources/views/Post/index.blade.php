@extends('layouts.main')
{{-- {{ dd($posts) }} --}}
@section('container')

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
        <h4>
            <a id="post" href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
        </h4>
        <p> oleh <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name ?  $post->author->name : '-' }}</a>,
            in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
        </p>

        <p><a  href="/post/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->excerpt }}...</a></p>

        <button type="button" class="btn btn-outline-secondary"><a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-dark">{{ $post->category->name }}</a></button>


    </article>
    @endforeach
@endsection
