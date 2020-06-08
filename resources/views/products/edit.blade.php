@extends('layouts.admin')
@section('title', 'danh sach product')
@section('css')
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
@endsection
@section('header')
@parent
    <h1>child header</h1>
@endsection
@section('content')
    <h2>Chỉnh sửa thông tin sản phẩm: </h2><br><br>
    <div class="row">
        <div class="col-sm-12">
            <form style="width: 100%;" action="{{ route('products.update', $product->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                Name Product: <br>
                <input style="border: 1px solid; border-radius: 10px; width: 100%;" type="text" name="name" value="{{$product->name}}"><br><br>
                Price: <br>
                <input type="number" name="price" id="" value="{{$product->price}}"><br><br>
                Description: <br>
                <input type="text" name="description" value="{{ $product->desc }}"><br><br>
                Brand: 
                <select name="brand_id"><br/>
                    @foreach(App\Models\Brand::all() as $brand)
                        <option value="{{$brand->id}}">{{ $brand->name }}</option>
                    @endforeach
                </select><br><br>
                <input class="float-right" type="submit" value="UPDATE">
            </form>
        </div>
    </div>
   
@endsection
