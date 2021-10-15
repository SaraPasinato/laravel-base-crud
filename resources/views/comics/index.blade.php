@extends('layouts.main')

@section('title','MyComics | COMICS')

@section('section-id','gallery')

@section('cdns')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css' integrity='sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==' crossorigin='anonymous'/>
@endsection

@section('content-jumbotron')
<div class="container-sm mb-5">
    <p><a id="btn-jumbo" href="{{route('comics.create')}}" class="btn btn-primary btn-lg">Insert new Comic</a></p>
</div>
@endsection

@section('content-section')   

    {{-- passaggio parametro di sessione --}}
    @if (session('success'))
    <div class=" my-5 alert alert-success w-50 mx-auto" role="alert">
      il film  {{session('success')}}  è stato eliminato con successo
      </div>
    @endif

        <div class="comics">
            @forelse ($comics as $comic)
            <div class="card bg-dark col-2" >
                <a href="{{ route('comics.show',$comic->id) }}">  
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="card-img-top">
                    <p class="card-title  fs-6">{{$comic->title}}</p>
                    <p class="card-text fst-italic text-secondary text-capitalize">{{$comic->series}}</p>
                    <small class="card-text fw-lighter text-secondary text-lowercase"> {{$comic->type}}</small>
                    <div id="trash">
                        <form action="{{route('comics.destroy',$comic->id)}}" method="post"  class="delete-form" data-comic="{{ $comic->title}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="btn btn-danger text-right"><i class="fas fa-trash"></i></button>                        
                        </form>
                    </div>
                </a>
            </div>
            @empty
                <h1>Non ci sono Fumetti</h1>
            @endforelse

        </div>
        <div class="controls">
            <p>
                <a href="#" class="btn btn-primary mx-auto text-uppercase me-2 disabled"> Load more</a>
                <a href="{{route('comics.trash')}}" class="btn btn-warning mx-auto text-uppercase"> Go to Trash</a>
            </p>
           
        </div>
@endsection

@section('scripts')
 <script src="{{asset('js/delete_confirm.js')}}"></script>
    
@endsection