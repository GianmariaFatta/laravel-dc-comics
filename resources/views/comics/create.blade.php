@extends('layouts.layouts')
@section('main-content')
<div class="container p-5">
    <div class="row">
        <div class="col ">
        <h1 class='text-primary'>Create New Comic</h1>

            <form action='{{route('comics.store')}}'  method='POST'>
            @csrf
  <div class="mb-2 w-50">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name='title' required>
  </div>
  <div class="mb-2 w-50">
    <label for="thumb" class="form-label">Thumb</label>
    <input type="url" class="form-control" id="thumb" name='thumb'required >
  </div>
  <div class="mb-2 w-50">
    <label for="price" class="form-label">Price</label>
    <input type="text" class="form-control" id="price" name='price'required >
  </div>
  <div class="mb-2 w-50">
    <label for="series" class="form-label">Series</label>
    <input type="text" class="form-control" id="series" name='series'required >
  </div>
  <div class="mb-2 w-50">
    <label for="sale_date" class="form-label">Sale Date</label>
    <input type="date" class="form-control" id="sale_date" name='sale_date'required >
  </div>
  <div class="mb-2 w-50">
    <label for="type" class="form-label">Type</label>
    <input type="text" class="form-control" id="type" name='type'required >
  </div>
  <div class="mb-2  ">
    <label for="description" class="form-label">description</label>
    <textarea class='w-100 text-black' id="description" name='description'cols='20'  ></textarea>
  </div>
  <div class="mb-2  ">
    <label for="artists" class="form-label">Artists</label>
    <textarea class='w-100 text-black' id="artists" name='artists'cols='20'  ></textarea>
  </div>
  <div class="mb-2 ">
    <label for="writers" class="form-label">Writers</label>
    <textarea class='w-100 text-black' id="writers" name='writers' cols='20'  ></textarea>
  </div>


  <button type="submit" class="btn btn-primary">ADD</button>
</form>

</div>
</div>
    <a class='fs-5 text-white btn btn-primary my-5'  href="{{route('comics.index')}}"> Go back to Comics</a>
</div>
    </div>
</div>
@endsection

