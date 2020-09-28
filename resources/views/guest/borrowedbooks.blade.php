@extends('..//guest_layout')
@section('body')
<h1 style='text-align:center;margin-bottom:20px;'>Book Info</h1>
<div class="row">
    @foreach ($books as $book)
            <div class="col-md-4 mb-5 ">
                <div class="card h-100 ">
                    <div class="card-body">
                        <div style="height:300px">
                            <img src="{{asset('uploads/books_image/'.$book->img)}}" style='width:100%; height:100% ; background-size:cover' >
                        </div>
                        <h4 class="card-title">Name : {{$book->name}}</h4>
                        <h5 class="card-title">Author : {{$book->author}}</h5>
                        <p class="card-text">Description : {{$book->description}}</p>
                    </div>
                    <div class="card-footer">
                        <a href="/backtoshielf/{{$book->id}}" class="btn btn-dark btn-sm">Back to shielf</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
@endsection
