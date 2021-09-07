@extends('layout.app')
@section('title', 'homepage')

@section('content')

    <h1>This is my content</h1>

    <div class="jumbo">
        THIS IS MY JUMBO
    </div>



    <div class="card-container">
        THIS IS MY CARD SECTION
        @foreach($comicsSeries as $comicsSerie)
            <div class="card">
                <img src="{{$comicsSerie['thumb']}}" alt="{{$comicsSerie['title']}}">
                <h6>{{$comicsSerie['series']}}</h6>
            </div>
        @endforeach
    </div>



@endsection