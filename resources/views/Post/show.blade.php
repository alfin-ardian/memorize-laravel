@extends('layouts.main')

@section('container')
        <h1 class="mb-5">{{ $post->title }}</h1 >
        <h1>{{ $post->author ? 'Oleh : '. $post->author : '' }}</h1>
        <p>{!! $post->body !!}</p>
    <a href="/post" class="text-decoration-none">Kembali</a>
@endsection
