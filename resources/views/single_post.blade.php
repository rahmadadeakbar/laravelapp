
{{-- @dd($post) --}}

@extends('layout.main')

@section('container')

<article class="mb-5">
    <h2>
       {{ $data->title }}
    </h2>
    <a href="/autors/{{ $data->autor->username }}" class="text-decoration-none">{{ $data->autor->name }}</a> in <a href="/category/{{ $data->category->slug }}" class="text-decoration-none">{{ $data->category->name }}</a></h6> <br>
    {!! $data->body !!}
</article>

<a href="/posts" class="text-decoration-none">Back to Post</a>
    
@endsection
   
