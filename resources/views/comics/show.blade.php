@extends('layouts.main')

@section('content')
    <div class="container-fluid d-flex">
        <div class="card" style="width: 18rem;">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">Sale date: {{ $comic->sale_date }}</p>
                <p class="card-text">Series: {{ $comic->series }}</p>
                <p class="card-text">Type: {{ $comic->type }}</p>
                <p class="card-text">Price: {{ $comic->price }}</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>
        <div class="container ms-5">
            <h3>Description:</h3>
            <p>{{ $comic->description }}</p>
            <h3>Artists:</h3>
            <p>{{ $comic->artists }}</p>
            <h3>Writers</h3>
            <p>{{ $comic->writers }}</p>
        </div>
    </div>
@endsection
