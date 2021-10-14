@if ($comic->exists)
<form action="{{route('comics.update',$comic->id)}}" method="POST">
    @method('PATCH')
 
    @else
    <form action="{{route('comics.store')}}" method="POST">
@endif

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
    <div class="row h-25 justify-content-between">
        <input type="submit"  class=" btn w-25  btn-success mx-auto"value="Submit">
        <input type="reset"  class=" btn w-25  btn-danger mx-auto"value="Reset">
        <a href="{{url()->previous()}}" class=" btn w-25 d-inline-block  btn-outline-secondary mx-auto">Back</a>
    </div>

</form>