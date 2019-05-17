@extends('master')
@section('title', 'list product')
@section('name', 'All Product')
@section('content')
    @if(Session::has('success'))
        <div class="alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    <a href="{{route('products.create')}}">
        <button type="button" class="btn btn-outline-primary">ADD PRODUCT</button>
    </a>
    <table class="table" style="text-align: center">
        <thead>
        <tr style="background: #f6993f">
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">description</th>
            <th scope="col">price</th>
            <th scope="col">price_old</th>
            <th scope="col">image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $key=>$product)
        <tr>
            <th scope="row">{{++$key}}</th>
            <th scope="col">{{$product->name}}</th>
            <th scope="col">{{$product->description}}</th>
            <th scope="col">{{$product->price}}</th>
            <th scope="col">{{$product->price_old}}</th>
            <th>
                <img src="{{asset('storage/'.$product->image)}}" style="width: 150px"/>
            </th>
            <th>

                <a href="{{route('products.destroy',['id'=>$product->id])}}">
                    <button type="button" class="btn btn-outline-danger" onclick="return confirm('Do you want delete product {{$product->name}}')">DELETE</button>
                </a>
                <a href="{{route('products.edit',['id'=>$product->id])}}">
                    <button type="button" class="btn btn-outline-primary">EDIT</button>
                </a>
                <a href="{{route('carts.create',['id'=>$product->id])}}">
                    <button type="button" class="btn btn-outline-primary">ADD CART</button>
                </a>
            </th>
        </tr>
            @endforeach
        </tbody>
    </table>
@endsection


