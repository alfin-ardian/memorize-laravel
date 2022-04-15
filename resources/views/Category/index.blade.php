@extends('layouts.main')

@section('container')
    {{-- <h4 class="mb-5">Post Category : {{ $category }}</h3> --}}

    @foreach ($categories as $category)

    <div class="card w-25">
        <div class="card-body">
            <h2>
                <a id="post" href="/categories/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a>
            </h2>
        </div>
      </div>

    @endforeach
@endsection
