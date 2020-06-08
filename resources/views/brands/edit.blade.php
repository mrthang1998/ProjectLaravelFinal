<!-- The Modal -->
    <div class="modal" id="myModal-{{$brand->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                    <form action="{{ route('brands.update', $brand->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <input type="hidden" class="id_brand" name="id_brand" value="{{$brand->id}}">
                        <input class="name" type="text" name="name" id="" value="{{$brand->name}}">
                        <button>Update</button>
                    </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>