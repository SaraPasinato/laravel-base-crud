@extends('layouts.main')

@section('title','MyComics | Modifica un Comics')

@section('section-id','section-form')

@section('content-section')
    <div class="container-sm text-light my-5">
        <h1> New Comic</h1>
        <form action="{{route('comics.update',$comic->id)}}" method="POST">
            @csrf

            @method('PATCH')
            <div class="my-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" 
                value="{{$comic->title}}"
                name="title">
            </div>
            <div class="my-3">
                <label for="thumb" class="form-label">Poster Image</label>
                <input type="text" class="form-control" id="thumb" value="{{$comic->thumb}}"name="thumb">
            </div>
            <div class="my-3">
                <label for="desc" class="form-label">Description</label>
               <textarea name="description" id="desc" cols="10" rows="5" class="form-control">{{$comic->description}}</textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <div class="input-group ">
                    <span class="input-group-text">$</span>
                    <input type="number" min="0.00" max="1000.00" step="0.01" class="form-control" name="price" value="{{$comic->price}}"/>
                </div>
            </div>
            <div class="my-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series"value="{{$comic->series}}">
            </div>
            <div class="my-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date"value="{{$comic->sale_date}}">
            </div>
            <div class="my-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
            </div>
            <input type="submit"  class=" btn w-100 d-block btn-success mx-auto"value="invia">
        </form>
    </div>
@endsection