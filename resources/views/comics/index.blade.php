@extends('layouts.main')

@section('title','MyComics | COMICS')

@section('section-id','gallery')

@section('content-jumbotron')
<div class="container-sm">
    <p><a id="btn-jumbo" href="#" class="btn btn-primary ">Current Series</a></p>
</div>
@endsection

@section('content-section')   
        <div class="comics">
            @forelse ($comics as $comic)
            <div class="card bg-dark" >
                <a href="{{ url("/comics_list/$loop->index") }}">  
                    <img src="{{$comic['thumb']}}" alt="" class="img-fluid">
                    <p class="card-title">{{$comic['title']}}</h5>
                    <p class="card-text"> {{$comic['type']}}</h6>
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