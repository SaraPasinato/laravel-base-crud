@extends('layouts.main')

@section('title','MyComics | COMICS')

@section('section-id','gallery')

@section('content-jumbotron')
<div class="container-sm">
    <p><a id="btn-jumbo" href="{{route('comics.create')}}" class="btn btn-primary btn-lg">Insert new Comic</a></p>
</div>
@endsection

@section('content-section')   
        <div class="comics">
            @forelse ($comics as $comic)
            <div class="card bg-dark col-2" >
                <a href="{{ route('comics.show',$comic->id) }}">  
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="img-fluid">
                    <p class="card-title">{{$comic->title}}</h5>
                    <p class="card-text"> {{$comic->type}}</h6>
                </a>
            </div>
            @empty
                <h1>Non ci sono Fumetti</h1>
            @endforelse

        </div>
        <div class="controls">
            <p><a href="#" class="btn btn-primary mx-auto text-uppercase"> Load more</a></p>
        </div>
@endsection