@extends("..//admin_layout")
@section("body")
<div class="table-responsive">
            <h1 class="text-center">Members Page</h1>
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">control</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($members as $member)
                    <tr>
                        <th scope="row">{{$member->id}}</th>
                        <td>{{$member->name}}</td>
                        <td>{{$member->email}}</td>
                        <td>{{$member->password}}</td>
                        <td>
                            <a href="/userview/{{$member->id}}" class="btn btn-primary">Show</a>      
                            <a href="/deletemember/{{$member->id}}" class="btn btn-danger">Delete</a>               
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

@endsection