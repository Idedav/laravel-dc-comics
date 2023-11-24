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
                <tr>
                    <td>{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}">
                            <i class="fa-solid fa-info"></i>
                        </a>
                        <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                        <a class="btn btn-danger" href="#">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
