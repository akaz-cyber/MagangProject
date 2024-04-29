@extends('dashboard.layouts.maindashboard')
@section('titledash','Home')
@section('contain')

<div
class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Welcome back {{ auth()->user()->name }} nyaa!!</h1>

</div>
@endsection
