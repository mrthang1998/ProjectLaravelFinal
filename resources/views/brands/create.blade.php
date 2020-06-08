<!-- The Modal -->
<div class="modal" id="create_brand">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
            <form action="{{ route('brands.store') }}" method="post">
                {{ csrf_field() }}
                Name Brand: <input type="text" name="name" id="">
                <input type="submit" value="Create">
            </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
    
