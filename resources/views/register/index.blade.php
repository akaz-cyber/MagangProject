@extends('layouts.main')
@section('title','registeration')

@section('main')

<div class="row justify-content-center align-items-center" style="height: 100vh;">
    <div class="col-md-5">
        <main class="form-signin text-center">
            <form action="/register" method="POST">
                @csrf
              <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

              <div class="form-floating">
                  <input type="email" name="email" class="form-control mb-2 @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" placeholder="name@example.com" required>
                  <label for="email">Email address</label>
                  @error('email')
                  <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>

                  @enderror
                </div>
              <div class="form-floating">
                <input type="text" name="name" class="form-control mb-3 @error('name') is-invalid @enderror " value="{{ old('name') }}" id="name" placeholder="name@example.com" required>
                <label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback text-start">
                    {{ $message }}
                  </div>

                @enderror
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control mb-3 @error('username') is-invalid @enderror " value="{{ old('username') }}" id="username" placeholder="name@example.com" required>
                <label for="username">username</label>
                @error('username')
                <div class="invalid-feedback text-start">
                    {{ $message }}
                  </div>

                @enderror
              </div>
              <div class="form-floating">
                  <input type="password" name="password" class="form-control @error('password') is-invalid  @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback text-start mb-5">
                    {{ $message }}
                  </div>

                @enderror
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
              <p class="mt-5 mb-3 text-muted">You have account? <a href="/login">Login Now</a></p>
            </form>
        </main>
    </div>
</div>


@endsection



