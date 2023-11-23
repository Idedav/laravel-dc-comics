@extends('layouts.main')

@section('content')
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Comic type</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <a href="{{ route('home') }}">
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>{{ $comic->price }}</td>
                    </tr>
                </a>
            @endforeach

        </tbody>
    </table>
@endsection
