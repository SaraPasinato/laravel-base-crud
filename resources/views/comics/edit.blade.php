@extends('layouts.main')

@section('title','MyComics | Modifica un Comics')

@section('section-id','section-form')

@section('content-section')
    <div class="container-sm text-light my-5">
        <h1> Edit Comic</h1>

         @include('includes.comics.form')
    
    </div>
@endsection