@extends('layouts.index')
@section('css')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12 content">
            @foreach($brands as $brand)
                <div class="">
                    {{$brand->name}}
                </div>
                <div class="row">
                    @foreach($brand->products as $product)
                        <div class="col-sm-3">
                            <div class="product">
                                <img src="{{$product->image}}" alt="">
                                <a href="detailproduct"><h3>{{$product->name}}</h3></a>
                                <h4>{{$product->price}}$</h4>
                                <a href="#">Thêm vào giỏ</a>
                            </div>

                        </div>
                    @endforeach
                </div>
                
            @endforeach
        </div>
    </div>
@endsection