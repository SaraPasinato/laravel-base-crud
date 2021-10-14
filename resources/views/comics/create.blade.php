@extends('layouts.main')

@section('title','MyComics | Inserisci un Comics')

@section('section-id','section-form')

@section('content-section')
    <div class="container-sm text-light my-5">
        <h1> New Comic</h1>
        @include('includes.comics.form')
    </div>
@endsection