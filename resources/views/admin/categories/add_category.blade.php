@extends('admin_layout')
@section('body')
<div class="container">
    <h1 class="text-center">Add Page</h1>
    <form class="" action="/add_category" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" placeholder="Name" required="required"/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <input type="text" name="description" class="form-control" placeholder="Description" autocomplete="off" required="required">
            </div>
        </div>
        <div class="form-group row">
            <button type="submit" class="btn btn-primary col-sm-2 m-auto">Submit</button>
        </div>
    </form>
</div>
@endsection