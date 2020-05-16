<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td> {{$product->id}}</td>
                <td> {{$product->name}}</td>
                <td> {{$product->price}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
   
</body>
</html>