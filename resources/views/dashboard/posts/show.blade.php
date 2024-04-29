@extends('dashboard.layouts.maindashboard')
@section('titledash', 'show')


@section('contain')

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h2 class="mb-md-3">{{ $post->title }}</h2>
            {{-- <h5>By: {{ $post["author"] }}</h5> --}}
            <a href="/dashboard/posts" class="btn btn-success"><span><i class="fa fa-arrow-circle-o-left me-1"></i > Back to all my posts</span></a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-light"><span></span><i class="fa fa-edit">
                </i></a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                    @csrf
                <button class="fa fa-times-circle  btn btn-danger"   onclick="return confirm('are you sure?')" type="submit" ></button>
                </form>
        {{-- <a href=""><span></span><i class="fa fa-times-circle  btn btn-danger"></i></a> --}}
            @if($post->image)
            <div style="max-height: 350px; overflow: hidden;">
                <img class="img-fluid mb-md-4 mt-2" src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
            </div>
            @else
            <img class="img-fluid mb-md-4 mt-2" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            @endif
           <article class="py-3">

               {!! $post->body !!}
           </article>

            <a href="/dashboard/posts" class="btn btn-primary" style="text-decoration: none">kembali</a>
        </div>

    </div>
</div>

@endsection
