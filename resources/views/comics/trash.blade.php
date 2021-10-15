@extends('layouts.main')

@section('title','MyComics | TRASH')

@section('section-id','comics-trash')

@section('cdns')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css' integrity='sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==' crossorigin='anonymous'/>
@endsection

@section('content-jumbotron')
<div class="container-sm mb-5">
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
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="img-fluid">
                    <p class="card-title  fs-6">{{$comic->title}}</p>
                    <p class="card-text fst-italic text-secondary text-capitalize">{{$comic->series}}</p>
                    <small class="card-text fw-lighter text-secondary text-lowercase"> {{$comic->type}}</small>
                    <div id="revert" class="d-flex ">
                        <form action="{{route('comics.restore',$comic->id)}}" method="POST"  class="delete-form me-1" data-comic="{{ $comic->title}}">
                            @csrf
                            @method('PATCH')
                            <button type="submit"  class="btn btn-primary text-right"><i class="fas fa-trash-restore-alt"></i></button>                        
                        </form>
                        <form action="{{route('comics.destroy',$comic->id)}}" method="post"  class="delete-form" data-comic="{{ $comic->title}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit"  class="btn btn-danger text-right"><i class="fas fa-trash"></i></button>                        
                        </form>
                    </div>
                </a>
            </div>
            @empty
                <div class="container-sm text-light mt-4">
                    <h1>Non ci sono Fumetti</h1>
                </div>
            @endforelse

        </div>
     
@endsection

@section('scripts')
 <script src="{{asset('js/delete_confirm.js')}}"></script>
    