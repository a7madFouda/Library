@extends("..//admin_layout")
@section("body")
<div class="container">
        <h1 class="text-center">Edit Profile</h1>
        <form class="" action="/UserUpdate/{{Auth::guard('webadmin')->user()->id}}" method="POST">
        @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" placeholder="Username" value="{{$member->name}}" autocomplete="off" required="required"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{$member->email}}" autocomplete="off" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="password form-control" autocomplete="new-password" value="" autocomplete="off">
                    <i class="show-pass fa fa-eye"></i>
                </div>
            </div>
            <div class="form-group row">
               <button type="submit" class="btn btn-primary col-sm-2 m-auto">Submit</button>
            </div>
        </form>
        </div>
@endsection
