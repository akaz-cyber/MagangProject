@extends('layouts.main')
@section('title','Home')
@section('main')
<style>

body{
    height: 100vh;
    background-color: #004864;
    background-image: linear-gradient(to bottom, #004864, #647FAC);
    background-repeat: no-repeat;
}
</style>


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://source.unsplash.com/1200x400/?nature" class="d-block w-100" alt="...">
            <div class="card-img-overlay d-flex align-items-center"
            style="background-color: rgba(0, 0, 0, 0.7)">
            <h5 class="card-title text-center flex-fill p-4 "></h5>
        </div>
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
        </div>
        <div class="carousel-item">
            <img src="https://source.unsplash.com/1200x400/?city" class="d-block w-100" alt="...">
            <div class="card-img-overlay d-flex align-items-center"
            style="background-color: rgba(0, 0, 0, 0.7)">
            <h5 class="card-title text-center flex-fill p-4 "></h5>
        </div>
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
        </div>
        <div class="carousel-item">
            <img src="https://source.unsplash.com/1200x400/?travel" class="d-block w-100" alt="...">
            <div class="card-img-overlay d-flex align-items-center"
            style="background-color: rgba(0, 0, 0, 0.7)">
            <h5 class="card-title text-center flex-fill p-4 "></h5>
        </div>
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>




{{--
    <h1>Halaman Home</h1> --}}
@endsection
