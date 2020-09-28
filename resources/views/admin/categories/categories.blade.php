@extends('admin_layout')
@section('body')
<div class="table-responsive">
                <h1 class="text-center">categories Page</h1>
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Register Date</th>
                            <th scope="col">Control</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $value)
                        <tr>
                            <th scope="row">{{$value["id"]}}</th>
                            <td>{{$value->name}}</td>
                            <td>{{$value->description}}</td>
                            <td>{{$value->created_at}}</td>
                            <td>
                                <a href="/edit_category/{{$value->id}}" class="btn btn-success mr-1"><i class="fa fa-edit"></i> Edit </a>
                                <a href="/delete_category/{{$value->id}}" class="btn btn-danger confirm mr-1"><i class="fa fa-times"></i> Delete </a>                          
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <a href="/add_category" class="btn btn-primary m-1 "><i class="fa fa-plus"></i> Add New Categories </a>


       

@endsection