@extends('layouts.main')
{{-- {{ dd($posts) }} --}}
@section('container')
    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
        <h2>
            <a id="post" href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
        </h2>
        <p>{{ $post->user->name ? 'Oleh :' . $post->user->name : ' lala' }},
            with tags : <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

        <p>{{ $post->excerpt }}</p>

        <a  href="/post/{{ $post->slug }}" class="text-decoration-none">Read More...</a>
    </article>
    @endforeach
@endsection
