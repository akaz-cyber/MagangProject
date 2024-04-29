@extends('layouts.main')
@section('title', 'Category')

@section('main')
    <h1>ini halaman Categories </h1>
    {{-- forech untuk melooping di blade --}}

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/contact?category={{ $category->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img"
                                alt="">
                            <div class="card-img-overlay d-flex align-items-center"
                                style="background-color: rgba(0, 0, 0, 0.7)">
                                <h5 class="card-title text-center flex-fill p-4 ">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>




    </div>


@endsection
