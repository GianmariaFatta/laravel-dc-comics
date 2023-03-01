@extends('layouts.layouts')
@section('title', $comic->title)
@section('jumbo')
@include('includes.jumbo')
@endsection
@section('main-content')

<div class="container ">
    <div class="row ">
        <div class="col-6 my-4 d-flex flex-column justify-content-start align-items-center">
            <h1>{{ $comic->title }}</h1>
            <div class="card details-card">
                <img class="img-fluid h-100 w-100" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
                <a class='fs-5 text-white btn btn-primary my-5'  href="{{route('comics.index')}}"> Go back to Comics</a>
        </div>
        <div class="col-6 my-4 d-flex flex-column justify-content-center align-items-center">
            <ul>
                <li class="text-white">
                    Overview:<br>{{ $comic->description }}
                </li>
                <li class="text-white">
                    {{ $comic->series }}
                    {{ $comic->type }}
                    {{ $comic->sale_date }}
                </li>
                <li class="text-primary  fs-5">
                   Price: {{ $comic->price }}
                </li>
            </ul>
            <h4>Writers</h4>
            <ul>
                <li class='text-white'>
                    {{ $comic->writers }}
                </li>
            </ul>
             <h4>Artists</h4>
            <ul>
                <li class='text-white'>
                    {{ $comic->artists }}
                </li>
            </ul>
            
        </div>
    </div>
</div>

@endsection
