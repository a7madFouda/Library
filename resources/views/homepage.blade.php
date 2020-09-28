@extends("../guest_layout")

@section('body')
    <!-- Page Content -->
  <div class="container">

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <h2>Welcome To Your Library</h2>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row books">
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
                        @if($book->borrowed==null && Auth::user())
                        <a href="/borrow_book/{{$book->id}}" class="btn btn-dark btn-sm">Borrow</a>
                        @else
                        <span style="background-color:#343a40;float:lift;color:#fff;height:31px;border-radius:3px;padding:5px;text-align:center;font-size:14px">Sorry this Book is Not Available</span>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach


    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

@endsection
