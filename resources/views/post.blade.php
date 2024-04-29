@extends('layouts.main')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-md-3">{{ $post->title }}</h2>
            {{-- <h5>By: {{ $post["author"] }}</h5> --}}
            <p >By. <a href="/contact?author={{ $post->user->username  }}" class="" style="text-decoration: none"> {{ $post->user->name}}</a> in <a class="" style="text-decoration: none" href="/contact?category={{ $post->category->slug }}">{{ $post->category->name }}</a> </p>

            @if($post->image)
            <div style="max-height: 400px; overflow: hidden;">
                <img class="img-fluid mb-md-4 mt-2" src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
            </div>
            @else
            <img class="img-fluid mb-md-4 mt-2" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            @endif
         <article class="py-3">

               {!! $post->body !!}
           </article>

            <a href="/contact" class="btn btn-primary" style="text-decoration: none">kembali</a>
        </div>

    </div>
</div>

@endsection
