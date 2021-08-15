
{{-- @dd($posts) --}}

@extends('layout.main')

@section('container')

<h1 class="mb-5">Post Categories </h1>

@foreach ($categories as $data)


    <ul>
        <li>
            <a href="/category/{{ $data->slug }}">{{ $data->name }}</a>
        </li>
    </ul>
    
@endforeach
@endsection
   
