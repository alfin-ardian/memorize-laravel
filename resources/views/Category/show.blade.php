@extends('layouts.main')

@section('container')
    <h4 class="mb-5">Post Category : {{ $category }}</h3>

    @foreach ($posts as $post)

    <article class="mb-5 border-bottom pb-4">
        <h2>
            <a id="post" href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
        </h2>
        <h5> {{ $post->author ? 'Oleh :' . $post->author : '' }}</h5>
        <p>{{ $post->excerpt }}</p>
    </article>
    <a href="/categories" class="text-decoration-none">Kembali ke list</a>

    @endforeach
@endsection
