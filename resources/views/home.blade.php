@extends('layouts.app')

@section('title', 'Home')

@section('main-content')
<section>
    <h1 class="text-center text-danger">FILM</h1>
    @forelse ($movies as $movie)
        <div class="card m-3">
            <div class="card-body">
            <h5 class="card-title">{{ $movie -> title }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie -> original_title }}</h6>
            <h1>{{ $movie -> vote}}</h1>
            </div>
        </div>
    @empty
        <div class="alert alert-danger" role="alert">
            <h4>Non ci sono film</h4>
        </div>
    @endforelse
</section>
@endsection
    
