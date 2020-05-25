<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <h2>Edit Product</h2>
        Name Product: <input type="text" name="name" value="{{$product->name}}"><br><br>
        Price: <input type="number" name="price" id="" value="{{$product->price}}"><br><br>
        Description: <input type="text" name="description" value="{{ $product->desc }}"><br><br>
        <input type="submit" value="UPDATE">
    </form>
</body>
</html>