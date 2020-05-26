<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="border:1px">
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
                <?php $brand =App\Models\Brand::find($product->brand_id) ?>
                <td> {{ $brand->name }}</td>
                <td> <a href="{{ route('products.edit', $product->id) }}">Update</a> </td>
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
   
</body>
</html>