@extends('master')
@section('title', 'Update Product')
@section('name', 'Update Product')
@section('content')
    <form action="{{route('products.update',['id'=>$product->id])}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">name</label>
            <input type="text" class="form-control" name="name" id="exampleFormControlInput1" value="{{$product->name}}">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">description</label>
            <input type="text" class="form-control" name="description" id="exampleFormControlInput1" value="{{$product->description}}">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">price</label>
            <input type="text" class="form-control" name="price" id="exampleFormControlInput1" value="{{$product->price}}">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">price_old</label>
            <input type="text" class="form-control" name="price_old" id="exampleFormControlInput1" value="{{$product->price_old}}">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">image</label>
            <input type="file" class="form-control" name="image" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div>
            <button type="submit" class="btn btn-outline-primary">SAVE</button>
        </div>

    </form>
@endsection