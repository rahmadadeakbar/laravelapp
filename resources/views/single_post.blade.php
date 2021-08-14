
{{-- @dd($post) --}}

@extends('layout.main')

@section('container')

<article class="mb-5">
    <h2>
       {{ $data["title"] }}
    </h2>
    <h5>{{ $data["autor"] }}</h5>
    <p>{{ $data["body"] }}</p>
</article>

<a href="/blog">Back to Post</a>
    
@endsection
   
