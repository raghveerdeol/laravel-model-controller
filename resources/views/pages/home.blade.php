@extends('layouts.app')

@section('title','Homepage')

@section('main-content')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-3 mb-2 ">
                    <div class="card border border-primary" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Original title: {{$movie->original_title}}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Title: {{$movie->title}}</h6>
                            <p class="card-text">Nazionality: {{$movie->nationality}}</p>
                            <p class="card-text">Released: {{$movie->date}}</p>
                            <p class="card-text">Vote: {{$movie->vote}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
