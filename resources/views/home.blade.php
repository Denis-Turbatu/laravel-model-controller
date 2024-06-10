@extends('layouts.app')

@section('content')
    <h1 class="my-5 ms-5">Lista Film</h1>

    <div class="row w-75 mx-auto">
        @foreach ($movies as $movie)
            <div class="col-6 col-md-4 ">
                @include('./partials/card_movie')
            </div>
        @endforeach
    </div>
    
@endsection