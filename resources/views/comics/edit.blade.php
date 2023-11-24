@extends('layouts.main')

@section('content')
    <h1>Edit Comic:</h1>

    <div class="row">

        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf

            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description"
                    value="{{ $comic->description }}">
            </div>
            <div class="form-group">
                <label for="thumb">Image</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>
            <div class="form-group">
                <label for="type">Comic type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
            </div>
            <div class="form-group">
                <label for="series">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
            </div>
            <div class="form-group">
                <label for="sale_date">Sale Date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
            </div>
            <div class="form-group">
                <label for="artists">Artists</label>
                <input type="text" class="form-control" id="artists" name="artists" value="{{ $comic->artists }}">
            </div>
            <div class="form-group">
                <label for="writers">Writers</label>
                <input type="text" class="form-control" id="writers" name="writers" value="{{ $comic->writers }}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
            </div>
            <div class="my-4">
                <button type="submit" class="btn btn-primary">Edit</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
            </div>
        </form>

    </div>
@endsection
