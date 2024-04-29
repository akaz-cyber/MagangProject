@extends('layouts.main')
@section('title', 'Contact')

@section('main')
    <div class="mt-4">
        <h1 class="text-center text-primary p-4" style="background-color: rgba(0, 248, 33, 0.1)">{{ $title }}</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="/contact">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                        <button class="btn btn-outline-primary d-md-none" type="submit" id="button-addon2">Button</button>
                    </div>
                </form>

            </div>
        </div>

        @if ($posts->count())
     <div class="card mb-3">
        @if($posts[0]->image)
        <div style="max-height: 450px; overflow: hidden;">
            <img class="img-fluid mb-md-4 mt-2" src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        </div>
        @else
        <img class="img-fluid mb-md-4 mt-2" src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        @endif
            <div class="card-body text-center">
                <h3 class="card-title"> <a class="text-decoration-none text-dark"
                        href="/post/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a> </h3>
                <p> By <a href="/contact?author={{ $posts[0]->user->username }}"
                        style="text-decoration: none">{{ $posts[0]->user->name }}</a> <a class="text-dark"
                        style="text-decoration: none"
                        href="/contact?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> </p>
                <p class="card-text">{{ $posts[0]->excerpt }}Some quick example text to build on the card title and make up
                    the bulk of the card's content.</p>
                <div class="text-muted border-bottom ">Last updated {{ $posts[0]->created_at->diffForHumans() }}
                </div>
                <a class="mt-3 btn btn-primary " href="/post/{{ $posts[0]->slug }}"
                    style="text-decoration: none">ReadMore</a>
            </div>
        </div>

        {{-- <h1>{{ $title }}</h1>
    <h5 class="card-title">{{ $posts[0]->title }}</h5> --}}



            <div class="container">
                <div class="row">
                    @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-md-3">
                        <div class="card">
                        <div class="position-absolute bg-primary px-3 py-2" >
                        <a class="text-light" style="text-decoration: none" href="/contact?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                        </div>
                        @if($post->image)
                        <div style="max-height: 450px; overflow: hidden;">
                            <img class="img-fluid mb-md-4 mt-2" src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
                        </div>
                        @else
                        <img class="img-fluid mb-md-4 mt-2" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                        @endif
                            <div class="card-body">
                                <h5 class="card-title"> <a style="text-decoration: none" href="/post/{{ $post->slug }}">{{ $post->title }}</a></h5>

                                <small> By <a href="/contact?author={{ $post->user->username }}"
                                    style="text-decoration: none">{{ $post->user->name }}</a>  </small>

                                  <small class="d-block">Category : <a class="text-dark"
                                    style="text-decoration: none"
                                    href="/contact?category={{ $posts[0]->category->slug }}">{{ $post->category->name }}</a></small>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <small class="text-muted border-bottom ">Last updated {{ $posts[0]->created_at->diffForHumans() }}
                                </small>
                                <a class="d-block mt-3" href="/post/{{ $post->slug }}" style="text-decoration: none">ReadMore</a>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        @else
        <div class="text-center py-5">
            <h1 class="">NOT POST FOUND</h1>

        </div>
            @endif
        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
        </div>

        {{-- forech untuk melooping di blade --}}

        @endsection
        {{-- <article class="mb-5 border-bottom">
            <h2>
                <a style="text-decoration: none" href="/post/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <p> By <a href="/authors/{{ $post->user->username }}"
                    style="text-decoration: none">{{ $post->user->name }}</a> <a class="text-dark"
                    style="text-decoration: none"
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </p>


            <p>{{ $post->excerpt }}</p>

            <a href="/post/{{ $post->slug }}" style="text-decoration: none">ReadMore</a>

        </article> --}}
