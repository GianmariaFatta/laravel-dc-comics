@extends('layouts.layouts')
@section('main-content')
    <div class="container">
        <div class="col my-5 ">
            <h1 class='text-primary'>Edit {{ $comic->title }}</h1>
            <div class="col ">
                <h1 class='text-primary'>Create New Comic</h1>
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action='{{ route('comics.update', $comic->id) }}' method='POST' novalidate>
                    @method('PUT')
                    @csrf
                    <div class="mb-2 w-50">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name='title' required
                            value='{{ old('title', $comic->title) }} '>
                    </div>
                    <div class="mb-2 w-50">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="url" class="form-control" id="thumb" name='thumb'required
                            value='{{ old('thumb', $comic->thumb) }} '>
                    </div>
                    <div class="mb-2 w-50">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name='price'required
                            value='{{ old('price', $comic->price) }} '>
                    </div>
                    <div class="mb-2 w-50">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name='series'required
                            value='{{ old('series', $comic->series) }}'>
                    </div>
                    <div class="mb-2 w-50">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="date" class="form-control" id="sale_date" name='sale_date'required
                            value='{{ old('sale_date', $comic->sale_date) }}'>
                    </div>
                    <div class="mb-2 w-50">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name='type'required
                            value='{{ old('type', $comic->type) }} '>
                    </div>
                    <div class="mb-2  ">
                        <label for="description" class="form-label">description</label>
                        <textarea class='w-100 text-black' id="description" name='description'cols='20'> {{ old('description', $comic->description) }}</textarea>
                    </div>
                    <div class="mb-2  ">
                        <label for="artists" class="form-label">Artists</label>
                        <textarea class='w-100 text-black' id="artists" name='artists'cols='20'>{{ old('artists', $comic->artists) }}</textarea>
                    </div>
                    <div class="mb-2 ">
                        <label for="writers" class="form-label">Writers</label>
                        <textarea class='w-100 text-black' id="writers" name='writers' cols='20'>{{ old('writers', $comic->writers) }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
