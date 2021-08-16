
{{-- @dd($posts) --}}

@extends('layout.main')

@section('container')

<h1 class="mb-5">Post Category : {{ $category }}</h1>

@foreach ($post as $data)

<article class="mb-5 border-bottom pb-5">
    <h2>
       <a href="/post/{{ $data->slug }}" class="text-decoration-none">{{ $data->title }}</a>
    </h2>
    <h5>{{ $data->autor }}</h5>
    <p>{{ $data->excerpt }}</p>
</article>
    
@endforeach
@endsection
   
