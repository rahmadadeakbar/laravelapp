
{{-- @dd($post) --}}

@extends('layout.main')

@section('container')

<article class="mb-5">
    <h2>
       {{ $data->title }}
    </h2>
    <h5>By. <a href="" class="text-decoration-none">{{ $data->user->name }}</a> in <a href="/category/{{ $data->category->slug }}">{{ $data->category->name }}</a></h5>
    {!! $data->body !!}
</article>

<a href="/posts" class="text-decoration-none">Back to Post</a>
    
@endsection
   
