@extends('master')
@section('title', 'Add Product')
@section('name', 'New Product')
@section('content')
    <form action="{{route('products.store')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên Sản Phẩm</label>
            <input type="text" class="form-control" name="name" id="exampleFormControlInput1">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Mô tả</label>
            <textarea type="text" class="form-control" name="description" id="exampleFormControlInput1"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Giá</label>
            <input type="text" class="form-control" name="price" id="exampleFormControlInput1">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Giá Cũ</label>
            <input type="text" class="form-control" name="price_old" id="exampleFormControlInput1">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Ảnh</label>
            <input type="file" class="form-control" name="image" id="exampleFormControlInput1">
        </div>
        <div>
            <button type="submit" class="btn btn-outline-primary">Thêm sản phẩm</button>
            <a href="{{route('products.list')}}">
                <button type="button" class="btn btn-outline-secondary">Danh sách</button>
            </a>
        </div>

    </form>
@endsection