@extends('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Blog Baru</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/admin/posts">
        @csrf
        <div class="mb-3">
        <label class="form-label">Judul</label>
        <input type="text" class="form-control @error('title')is-invalid @enderror" name="title" placeholder="silakan isi judulnya" value="{{ old('title') }}">
        @error('title')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="mb-3">
        <label class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug')is-invalid @enderror" name="slug" placeholder="silakan isi judulnya" value="{{ old('slug') }}">
        @error('slug')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        <div class="mb-3">
        <label class="form-label">Kategori</label>
        <select class="form-select @error('category_id') is-invalid @enderror" name="category_id">
            @foreach ($categories as $category)
            @if(old('category_id') == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
            @endforeach
        </select>
        @error('category_id')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        <div class="mb-3">
            <label for="body" class="form-label @error('body') is-invalid @enderror">Isi Kontent</label>
            @error('body')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
            <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script>
    const title = document.querySelector('input[name=title]');
    const slug = document.querySelector('input[name=slug]');

    title.addEventListener('change', function(e) {
        slug.value = title.value.toLowerCase().replace(/ /g, '-');
    });

    document.addEventListener('trix-file-accept', function(event) {
      event.preventDefault();
    });
</script>
@endsection
