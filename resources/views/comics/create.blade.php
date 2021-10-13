@extends('layouts.main')

@section('title','MyComics | Inserisci un Comics')

@section('section-id','create-form')

@section('content-section')
    <div class="container-sm text-light my-5">
        <h1> New Comic</h1>
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="my-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="my-3">
                <label for="thumb" class="form-label">Poster Image</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="my-3">
                <label for="desc" class="form-label">Description</label>
               <textarea name="description" id="desc" cols="10" rows="5" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <div class="input-group ">
                    <span class="input-group-text">$</span>
                    <input type="number" min="0.00" max="1000.00" step="0.01" class="form-control" name="price"/>
                </div>
            </div>
            <div class="my-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="my-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
            </div>
            <div class="my-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="comic book">
            </div>
            <input type="submit"  class=" btn w-100 d-block btn-success mx-auto"value="invia">
        </form>
    </div>
@endsection