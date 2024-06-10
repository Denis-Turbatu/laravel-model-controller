@extends('layouts.app')

@section('content')
    <h1>HomePage</h1>

    @foreach ($movies as $movie)
            <div class="col-6 col-md-4 ">
                @include('./partials/card_movie')
            </div>
        @endforeach
@endsection