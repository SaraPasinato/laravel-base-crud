
@if ($comic->exists)
<form action="{{route('comics.update',$comic->id)}}" method="POST" novalidate>
    @method('PATCH')
 @else
 <form action="{{route('comics.store')}}" method="POST" novalidate>
@endif
    @csrf
    <div class="my-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" 
        value="{{old('title',$comic->title)}}" required
        name="title">
       @error('title')
       <div class="invalid-feedback">
        {{$message}}
      </div>
       @enderror
    </div>
    <div class="my-3">
        <label for="thumb" class="form-label">Poster Image</label>
        <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" value="{{$comic->thumb}}"name="thumb">
    </div>
    <div class="my-3">
        <label for="desc" class="form-label">Description</label>
    <textarea name="description" id="desc" cols="10" rows="5" class="form-control @error('description') is-invalid @enderror">{{$comic->description}}</textarea>
    @error('secription')
       <div class="invalid-feedback">
        {{$message}}
      </div>
       @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <div class="input-group ">
            <span class="input-group-text">$</span>
            <input type="number" min="0.00" max="1000.00" step="0.01" class="form-control @error('price') is-invalid @enderror" name="price" value="{{old('price',$comic->price)}}"/>
        </div>
    </div>
    <div class="my-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{old('series',$comic->series)}}">
        @error('series')
        <div class="invalid-feedback">
         {{$message}}
       </div>
        @enderror
    </div>
    <div class="my-3">
        <label for="sale_date" class="form-label">Sale Date</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date"value="{{old('sale_date',$comic->sale_date)}}">
        
    </div>
    <div class="my-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control  @error('type') is-invalid @enderror" id="type" name="type" value="{{old('type',$comic->type)}}">
        @error('type')
        <div class="invalid-feedback">
         {{$message}}
       </div>
        @enderror
    </div>
    <div class="row h-25 justify-content-between">
        <button type="submit"  class=" btn w-25  btn-success mx-auto">{{$comic->id ? 'Edit':'Add'}}</button>
        <input type="reset"  class=" btn w-25  btn-danger mx-auto"value="Reset">
        <a href="{{url()->previous()}}" class=" btn w-25 d-inline-block  btn-outline-secondary mx-auto">Back</a>
    </div>

</form>