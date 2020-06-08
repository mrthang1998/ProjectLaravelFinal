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
    <h2>Danh sách sản phẩm</h2>
    <div style="margin-bottom: 10px;">
        <button  type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#create_product">
                Add
        </button>
        @include('products.create')
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped table-bordered">
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td>Name Product</td>
                        <td>Price</td>
                        <td>Description</td>
                        <td>Brand</td>
                        <td>Action</td>
                    </tr>
                @foreach($products as $product)
                    <tr>
                        <td> {{$product->id}}</td>
                        <td> {{$product->name}}</td>
                        <td> {{$product->price}}</td>
                        <td> {{ $product->desc }} </td>
                        <?php $brand = App\Models\Brand::find($product->brand_id) ?>
                        <td> {{ $brand->name }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}">
                                <button class="btn btn-info">Edit</button>
                            </a> 
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-primary">Delete</button>
                            </form>
                        </td>
        
                    </tr>
                    

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
   
@endsection