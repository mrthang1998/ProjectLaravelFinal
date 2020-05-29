@extends('layouts.admin')
@section('title', 'danh sach product')
@section('css')
    <link rel="stylesheet" href="style.css">
@endsection
@section('header')
@parent
    <h1>child header</h1>
@endsection
@section('content')
    <h2>Danh sách sản phẩm</h2>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-dark table-striped">
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td>Name Product</td>
                        <td>Price</td>
                        <td>Description</td>
                        <td>Brand</td>
                        <td> <a href="{{ route('products.create') }}">Create</a> </td>
                    </tr>
                @foreach($products as $product)
                    <tr>
                        <td> {{$product->id}}</td>
                        <td> {{$product->name}}</td>
                        <td> {{$product->price}}</td>
                        <td> {{ $product->desc }} </td>
                        <?php $brand = App\Models\Brand::find($product->brand_id) ?>
                        <td> {{ $brand->name }}</td>
                        <td> <a href="{{ route('products.edit', $product->id) }}">Edit</a> </td>
                        <td>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button>Delete</button>
                        </form>
                        </td>
                    </tr>
                    

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
   
@endsection