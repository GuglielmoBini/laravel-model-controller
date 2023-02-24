@extends('layouts.main')
@section('title', 'home')
@section('content')
  <section id="movies">
      <div class="container">
          <h3 class="mt-5">Your Movies</h3>
          <div class="card-container d-flex flex-wrap justify-content-center">
            @foreach ($movies as $movie)                  
              @include('movies.card')
            @endforeach
          </div>
      </div>
  </section>
@endsection