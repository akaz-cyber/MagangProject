@extends('layouts.main')

@section('title','login')

@section('main')
@if(session()->has('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
 {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
@if (session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
 {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<div class="row justify-content-center align-items-center" style="height: 100vh;">
    <div class="col-md-5">

        <main class="form-signin text-center">
            <form action="/login" method="POST">
                @csrf
              <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

              <div class="form-floating">
                <input type="email" name="email" class="form-control mb-3  @error('email')
                    is-invalid
                @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control mb-4 @error('password')
                    is-invalid
                @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
              <p class="mt-5 mb-3 text-muted">Not registered? <a href="/register">Register Now</a></p>
            </form>
        </main>
    </div>
</div>


@endsection
