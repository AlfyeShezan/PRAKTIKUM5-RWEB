@extends('layout')

@section('title', 'Kategori')

@section('content')
    <span class="badge">Routing Dengan Parameter #3</span>
    <h1>Kategori ID: {{ $id }}</h1>
    <p>Menampilkan semua item dalam kategori dengan ID unik: <code>{{ $id }}</code>. Filter parameter berfungsi dengan sempurna.</p>
@endsection
