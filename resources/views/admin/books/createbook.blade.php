@extends("..//admin_layout")
@section("body")
    <h1 style='text-align:center;margin-bottom:20px;'> Create Books</h1>
    <form action='/submitBook' method='POST' enctype="multipart/form-data">
        @csrf
        <div class="form-group font-weight-bold">
            <label for="postTitle">Book Name</label>
        <input type="text" name="bookname" class="form-control" id="exampleInputPassword1" value="{{old('bookname')}}">
            <span style="color:red;font-weight:bold">{{$errors->first('bookname')}}</span>
        </div>

        <div class="form-group font-weight-bold">
            <label for="postBody">Category</label>
        <input type="text" name="category" class="form-control" id="exampleInputPassword1" value="{{old('category')}}">
        </div>

        <div class="form-group font-weight-bold">
            <label for="postBody">Author</label>
        <input type="text" name="author" class="form-control" id="exampleInputPassword1" value="{{old('author')}}">
        </div>

        <div class="form-group font-weight-bold">
            <label for="postBody">Description</label>
        <input type="text" name="description" class="form-control" id="exampleInputPassword1" value="{{old('description')}}">
        </div>
        <div class="form-group font-weight-bold">
            <label class="col-sm-2 col-form-label" for="status">Status</label>
            <select class="form-control" id="status" name="status">
                <option value="Available">Available</option>
                <option value="Not Available">Not Available</option>
            </select>
        </div>
        <div class="form-group font-weight-bold">
            <label for="book_image">Book Image</label>
            <input type="file" class="form-control-file" id="book_image" name="book_img">
        </div>

        <button type="submit" name='submit' class="btn btn-dark font-weight-bold">Submit</button>
    </form>
@endsection