@extends('admin_layout')
@section('body')
<div class="container">
        <h1 class="text-center">Edit Page</h1>
        <form class="" action='/edit_category/{{$data->id}}' method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{$data->name}}" placeholder="Name of the category" required="required"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control" value="{{$data->description}}" placeholder="Describe the categorie"/>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        <a href="{{URL::previous()}}" ><button class="btn btn-danger">Back</button></a>
</div>
@endsection