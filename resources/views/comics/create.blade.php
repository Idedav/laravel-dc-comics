@extends('layouts.main')

@section('content')
    <h1>Insert new Comic:</h1>

    <div class="row">

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="form-group">
                <label for="thumb">Image</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="form-group">
                <label for="type">Comic type</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
            <div class="form-group">
                <label for="series">Series</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="form-group">
                <label for="sale_date">Sale Date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date">
            </div>
            <div class="form-group">
                <label for="artists">Artists</label>
                <input type="text" class="form-control" id="artists" name="artists">
            </div>
            <div class="form-group">
                <label for="writers">Writers</label>
                <input type="text" class="form-control" id="writers" name="writers">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="my-4">
                <button type="submit" class="btn btn-primary">Add</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
            </div>
        </form>

    </div>
@endsection
