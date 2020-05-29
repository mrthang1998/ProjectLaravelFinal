<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand</title>
</head>
<body>
    <table border="1px">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td><a href="{{ route('brands.create') }}">Create</a></td>
            </tr>
        @foreach($brands as $brand)
            <tr>
                <td>{{ $brand->id }}</td>
                <td>{{ $brand->name }}</td>
                <td><a href="{{ route('brands.edit', $brand->id) }}">Edit</a></td>
                <td>
                <form action="{{ route('brands.destroy', $brand->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button>Delete</button>
                </form>
                </td>
            </tr>
        @endforeach
    </table>
    
</body>
</html>