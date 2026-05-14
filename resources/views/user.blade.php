@extends('layout')

@section('title', 'Profil User')

@section('content')
    <span class="badge">Routing Dengan Parameter #1</span>
    <h1>Halo, {{ $name }}!</h1>
    <p>Selamat datang di dashboard profil Anda. Parameter <strong>name</strong> yang Anda masukkan adalah: <code>{{ $name }}</code></p>
@endsection
