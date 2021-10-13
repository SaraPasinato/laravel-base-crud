@extends('layouts.main')

@section('title',"MyComics | DETAIL ")


@section('content-jumbotron')

<img src="{{ $comic->thumb }}" alt="{{$comic->title}}">
@endsection


@section('section-id',"card-$comic->title")

@section('content-section')
    
{{-- section bg blue --}}
 <div id="section-fill" ></div>
 
 <section id="preview-section" >
    <div class="row justify-content-evenly align-items-center h-100 ">
        <div class="col-8 h-100 row justify-content-center align-items-center ">
            <div class="contents ">
               <h3>{{ $comic->title}}</h3>
                <div class="ctrls">
                  <div class="price">
                      <p>U.S. Price: <span>{{$comic->price}}</span></p>
                      <p class="opacity">available</p>
                  </div>
                  <div class="disp">
                      <p>Check Availability <i class="fas fa-chevron-down"></i></p>
                  </div>
                </div>
                <p>{{$comic->description}}</p>
            </div>
        </div>

        <div class="col-3 h-100 row align-items-center justify-content-center ">
            <div class="col-12">
                <h4>advertisments</h4>
                <img src="{{asset('images/adv.jpg')}}" alt="logo adv">
            </div>
            <a class="btn  d-block w-25 btn-secondary me-2" href="{{url()->previous()}}">Indietro</a>
            <a class="btn  d-block w-25 btn-warning" href="{{route('comics.edit',$comic->id)}}">Modifica</a>
        </div>
    </div>
 </section>
@endsection