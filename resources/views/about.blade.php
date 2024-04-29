@extends('layouts.main')
@section('title', 'About')
@section('main')
    <h1>ini halaman about</h1>
    <h3>Nama saya {{ $name }}</h3>
    <p>Email saya {{ $email }}</p>
@endsection
