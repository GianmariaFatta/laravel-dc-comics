@extends('layouts.layouts')
@section('main-content')
    <div class="container p-5">
        <div class="row">
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
                <form action='{{ route('comics.store') }}' method='POST' novalidate>
                    @csrf
                    <div class="mb-2 w-50">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name='title' required
                            value='{{ old('title') }}'>
                    </div>
                    <div class="mb-2 w-50">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="url" class="form-control" id="thumb" name='thumb'required
                            value='{{ old('thumb') }}'>
                    </div>
                    <div class="mb-2 w-50">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name='price'required
                            value='{{ old('price') }}'>
                    </div>
                    <div class="mb-2 w-50">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name='series'required
                            value='{{ old('series') }}'>
                    </div>
                    <div class="mb-2 w-50">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="date" class="form-control" id="sale_date" name='sale_date'required
                            value='{{ old('sale_date') }}'>
                    </div>
                    <div class="mb-2 w-50">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name='type'required
                            value='{{ old('type') }}'>
                    </div>
                    <div class="mb-2  ">
                        <label for="description" class="form-label">description</label>
                        <textarea class='w-100 text-black' id="description" name='description'cols='20' value='{{ old('description') }}'></textarea>
                    </div>
                    <div class="mb-2  ">
                        <label for="artists" class="form-label">Artists</label>
                        <textarea class='w-100 text-black' id="artists" name='artists'cols='20' value='{{ old('artists') }}'></textarea>
                    </div>
                    <div class="mb-2 ">
                        <label for="writers" class="form-label">Writers</label>
                        <textarea class='w-100 text-black' id="writers" name='writers' cols='20' value='{{ old('writers') }}'></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">ADD</button>
                </form>

            </div>
        </div>
        <a class='fs-5 text-white btn btn-primary my-5' href="{{ route('comics.index') }}"> Go back to Comics</a>
    </div>
    </div>
    </div>
@endsection
