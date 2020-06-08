@extends('layouts.admin')
@section('title', 'danh sach brand')
@section('css')
<!--     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
@endsection
@section('header')
@parent
    <h1>child header</h1>
@endsection
@section('content')
<div class="main-container container-fluid">
    <h2>Danh sách thương hiệu</h2>
    <div style="margin-bottom: 10px;">
        <button  type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#create_brand">
            Add
        </button>
        @include('brands.create')
        
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped table-bordered">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Action</td>
                </tr>
                @foreach($brands as $brand)
                    <tr class="data-row">
                        <td class="align-middle iteration">{{ $brand->id }}</td>
                        <td class="align-middle name-brand">{{ $brand->name }}</td>
                        <td>
                            <button  type="button" data-mybrand = "{{ $brand->name }}" data-myid = "{{ $brand->id }}" class="btn btn-success edit" data-toggle="modal" data-target="#myModal-{{$brand->id}}">
                                    Edit
                            </button>
                            @include('brands.edit')
                            <form id="delete" action="{{ route('brands.destroy', $brand->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger   ">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

<!-- <script>
    $('#myModal').on('show.bs.modal', function (event) {
        console.log('Modal open'); 
        var button = $(event.relatedTarget) // Button that triggered the modal
        var name = button.data('mybrand') // Extract info from data-* attributes
        var id = button.data('myid')
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-body .name').val(name);
        modal.find('.modal-body .id_brand').val(id);
    })
</script>   -->



@endsection
    

    
    
    
    
    
    
    
    
