@extends('..//guest_layout')
@section('body')
    <h1 style='text-align:center;margin-bottom:20px;'>Book Info</h1>
    <table class="table">
        <tr>
            <td> <b>Book ID</b> </td>
            <td> {{$book->id}} </td>
        </tr>

        <tr>
            <td> <b>Name</b> </td>
            <td> {{$book->name}} </td>
        </tr>

        <tr>
            <td> <b>Category</b> </td>
            <td> {{$book->category}} </td>
        </tr>

        <tr>
            <td> <b>Author</b> </td>
            <td> {{$book->author}} </td>
        </tr>

        <tr>
            <td> <b>Description</b> </td>
            <td> {{$book->description}} </td>
        </tr>

        <tr>
            <td> <b>Created At</b> </td>
            <td> {{$book->created_at}} </td>
        </tr>

        <tr>
            <td> <b>Updated At</b> </td>
            <td> {{$book->updated_at}} </td>
        </tr>

        <tr>
        <td> <a href="{{URL::previous()}}" class="btn btn-dark" style="font-weight:bold;margin-top:50px">Back</a> </td>
        </tr>
    </table>
@endsection
