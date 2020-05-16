<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{ route('products.store') }}">
        {{ csrf_field() }}
        <label>Name</label><br/>
        <input name="name"><br/>

        <label>Price</label><br/>
        <input name="price"><br/>
        
        <label>Desc</label><br/>
        <input name="desc"><br/>

        <select name="brand_id"><br/>
            <option value="1">SamSung</option>
        </select>

        <button>Submit</button>
    </form>
</body>
</html>