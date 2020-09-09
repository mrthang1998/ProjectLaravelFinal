<!-- The Modal -->
<div class="modal" id="create_product">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label>{{ trans('product.label.name') }}</label><br/>
                    <input require name="name"><br/>
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

                    <?php $brands =App\Models\Brand::all() ?>
                    <select name="brand_id"><br/>
                        @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                    <input type="file" name="image" required="true">
                    <br/>
            
                    <button>Submit</button>
                </form>    
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


