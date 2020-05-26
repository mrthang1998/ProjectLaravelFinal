<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Create</title>
</head>
<body>
    <form action="{{ route('brands.store') }}" method="post">
        {{ csrf_field() }}
        Name Brand: <input type="text" name="name" id="">
        <input type="submit" value="Create">
    </form>
    
</body>
</html>