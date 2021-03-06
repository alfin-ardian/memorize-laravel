@extends('admin.layouts.main')

@section('container')
<div class="container my-3">
    <div class="row">
        <div class="col-lg-8">
            <div class="mb-3">
            <h1>{{ $post->title }}</h1 >
            <a href="/admin/posts" class="btn btn-success">kembali ke post</a>
            <a href="/admin/posts/{{ $post->slug }}/edit" class="btn btn-warning">edit</a>
            <form action="/admin/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn bg-danger text-white" onclick="return confirm('Anda yakin ingin hapus?')">
                    <span data-feather="trash-2"></span>Hapus
                </button>
              </form>
            </div>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
            <small class="text-muted"> Oleh <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name ?  $post->author->name : '-' }}</a>
                in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
                - {{ $post->created_at->diffForHumans() }}
            </small>
            <p class="text-justify">{!! $post->body !!}</p>
        </div>
    </div>
</div>

@endsection
