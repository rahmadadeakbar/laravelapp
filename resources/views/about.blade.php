
@extends('layout.main')

@section('container')
<h1>Halaman About</h1>
<h3>Rahmad Ade Akbar</h3>
<p>{{ $email }}</p>
<img src="img/{{ $gambar }}" alt="{{ $nama }} " width="200" class="img-thumbnail rounded-circle"> 
@endsection