
{{-- @dd($posts) --}}

@extends('layout.main')

@section('container')
@foreach ($posts as $data)

<article class="mb-5">
    <h2>
       <a href="/post/{{ $data->slug }}">{{ $data->title }}</a>
    </h2>
    <h5>{{ $data->autor }}</h5>
    <p>{{ $data->excerpt }}</p>
</article>
    
@endforeach
@endsection
   
