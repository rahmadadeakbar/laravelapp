
{{-- @dd($posts) --}}

@extends('layout.main')

@section('container')
<h1>{{ $title }}</h1>

@foreach ($posts as $data)
<article class="mb-5 border-bottom pb-5">
    <h2>
       <a href="/post/{{ $data->slug }}" class="text-decoration-none">{{ $data->title }}</a>
    </h2>
    <h6>By. <a href="/autors/{{ $data->autor->username }}" class="text-decoration-none">{{ $data->autor->name }}</a> in <a href="/category/{{ $data->category->slug }}" class="text-decoration-none">{{ $data->category->name }}</a></h6>
    <p>{{ $data->excerpt }}</p>

    <a href="/post/{{ $data->slug }}" class="text-decoration-none">Read more..</a>
</article>
    
@endforeach
@endsection
