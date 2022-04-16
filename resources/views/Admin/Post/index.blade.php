@extends('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Hello</h1>
</div>
<a href="/admin/posts/create" class="btn btn-primary">Tambah Blog</a>
<div class="table-responsive col-lg-9">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Judul</th>
          <th scope="col">Kategori</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
              <a href="/admin/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
              <a href="/admin/posts/{{ $post->id }}" class="badge bg-warning"><span data-feather="edit"></span></a>
              <a href="/admin/posts/{{ $post->id }}" class="badge bg-danger"><span data-feather="trash-2"></span></a>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
