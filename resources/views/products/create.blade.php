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
        <label>{{ trans('product.label.name') }}</label><br/>
        <input name="name"><br/>
        @if ($errors->has('name'))                
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('product.label.price') }}</label><br/>
        <input name="price"><br/>
        
        <label>{{ trans('product.label.desc') }}</label><br/>
        <input name="desc"><br/>
        @if ($errors->has('desc'))                
            <span class="help-block">
                <strong>{{ $errors->first('desc') }}</strong><br/>
            </span>
        @endif

        <select name="brand_id"><br/>
            <option value="1">SamSung</option>
        </select>

        <button>Submit</button>
    </form>

</body>
</html>