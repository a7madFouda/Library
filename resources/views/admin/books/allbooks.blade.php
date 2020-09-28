@extends("..//admin_layout")
@section("body")
<div class="table-responsive">
    <h1 class="text-center">Books Page</h1>
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Author</th>
                <th scope="col">Description</th>
                <th scope="col">status</th>
                <th scope="col">Picture</th>
                <th scope="col">Add Date</th>
                <th scope="col">Control</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr>
                <th scope="row"> {{$book->id}}</th>
                <td> {{$book->name}}</td>
                <td>{{$book->category}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->description}}</td>
                <td>{{$book->status}}</td>
                <td><img src="{{asset('uploads/books_image/'.$book->img)}}" width="100px"></td>
                <td>{{$book->created_at}}</td>
                <td>
                    <a href="/showbook/{{$book->id}}" class="btn btn-primary">Show</a>
                    <a href="/editbook/{{$book->id}}" class="btn btn-warning">Edit</a>
                    <a href="/deletebook/{{$book->id}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
        <a href="/createbook" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Add New book </a>

@endsection
