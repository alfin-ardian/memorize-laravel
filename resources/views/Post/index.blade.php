@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
        <h2>
            <a id="post" href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post['title'] }}</a>
        </h2>
        <h5> {{ $post->author ? 'Oleh :' . $post->author : '' }}</h5>
        <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach
@endsection
