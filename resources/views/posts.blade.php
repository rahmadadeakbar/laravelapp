
{{-- @dd($posts) --}}

@extends('layout.main')

@section('container')
<h1>Halaman Blog Post</h1>

@foreach ($posts as $data)
<article class="mb-5 border-bottom pb-5">
    
    <h2>
       <a href="/post/{{ $data->slug }}" class="text-decoration-none">{{ $data->title }}</a>
    </h2>
    <h5>By. <a href="" class="text-decoration-none">{{ $data->user->name }}</a> in <a href="/category/{{ $data->category->slug }}" class="text-decoration-none">{{ $data->category->name }}</a></h5>
    <p>{{ $data->excerpt }}</p>

    <a href="/post/{{ $data->slug }}" class="text-decoration-none">Read more..</a>
</article>
    
@endforeach
@endsection
   
