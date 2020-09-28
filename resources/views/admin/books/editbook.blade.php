@extends("..//admin_layout")
@section("body")
    <h1 style='text-align:center;margin-bottom:20px;'> Create Books</h1>
    <form action='/updatebook/{{$book->id}}' method='POST'>
        @csrf
        @method('post')
        <div class="form-group font-weight-bold">
            <label for="postTitle">Book Name</label>
        <input type="text" name="bookname" class="form-control" id="exampleInputPassword1" value="{{$book->name}}">
            <span style="color:red;font-weight:bold">{{$errors->first('bookname')}}</span>
        </div>

        <div class="form-group font-weight-bold">
            <label for="postBody">Category</label>
        <input type="text" name="category" class="form-control" id="exampleInputPassword1" value="{{$book->category}}">
        </div>

        <div class="form-group font-weight-bold">
            <label for="postBody">Author</label>
        <input type="text" name="author" class="form-control" id="exampleInputPassword1" value="{{$book->author}}">
        </div>

        <div class="form-group font-weight-bold">
            <label for="postBody">Description</label>
        <input type="text" name="description" class="form-control" id="exampleInputPassword1" value="{{$book->description}}">
        </div>

        <button type="submit" name='submit' class="btn btn-dark font-weight-bold" style="margin-left:30%;margin-top:50px">Update</button>
        <a href="/allbooks" class="btn btn-dark" style="font-weight:bold; float:right; margin-right:30%;margin-top:50px">Cancel</a>
    </form>
@endsection