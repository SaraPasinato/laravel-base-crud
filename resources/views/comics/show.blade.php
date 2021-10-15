@extends('layouts.main')

@section('title',"MyComics | DETAIL ")


@section('content-jumbotron')

<img src="{{ $comic->thumb }}" alt="{{$comic->title}}">
@endsection


@section('section-id',"card-$comic->title")

@section('content-section')
    
{{-- section bg blue --}}
 <div id="section-fill" ></div>
 
 <section id="preview-section"  >
    <div class="container pt-4 ">
        <div class="row justify-content-evenly align-items-center h-50">
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
            <div class="col-3 h-100 row align-items-center justify-content-center mb-4">
                <div class="col-12">
                    <h4>advertisments</h4>
                    <img src="{{asset('images/adv.jpg')}}" alt="logo adv">
                </div>
            </div>
            <div class="row h-50 align-items-center justify-content-center mt-2 mb-5">
                <div class="col-6 ">
                    <form action="{{route('comics.destroy',$comic->id)}}" method="post" class="delete-form" data-comic="{{$comic->title}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value=" Permanently Delete " class="d-block btn w-50 btn-danger me-2" >
                    </form>
                </div>
                    <div class="col-6 d-flex">
                        <a class="btn  d-block w-25 btn-secondary me-2" href="{{url()->previous()}}">Back</a>
                        <a class="btn  d-block w-25 btn-warning" href="{{route('comics.edit',$comic->id)}}">Edit</a>
                    </div>
            </div>
        </div> 
    </div>
 </section>
@endsection

@section('scripts')
<script src="{{asset('js/delete_confirm.js')}}"></script>
@endsection