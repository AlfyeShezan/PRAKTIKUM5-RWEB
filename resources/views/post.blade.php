@extends('layout')

@section('title', 'Detail Postingan')

@section('content')
    <span class="badge">Routing Dengan Parameter #2</span>
    <h1>Postingan: {{ $slug }}</h1>
    <p>Anda sedang membaca konten dengan identifier slug: <code>{{ $slug }}</code>. Data ini diambil secara dinamis dari URL.</p>
@endsection
