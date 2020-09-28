@extends("..//admin_layout")
@section("body")
    <h1 style='text-align:center;margin-bottom:20px;'>Members Info</h1>
    <table class="table">
        <tr>
            <td> <b>Member ID</b> </td>
            <td> {{$member->id}} </td>
        </tr>
        
        <tr>
            <td> <b>User Name</b> </td>
            <td> {{$member->name}} </td>
        </tr>

        <tr>
            <td> <b>Email</b> </td>
            <td> {{$member->email}} </td>
        </tr>

        <tr>
            <td> <b>Password</b> </td>
            <td> {{$member->password}} </td>
        </tr>

        <tr>
            <td> <b>Created At</b> </td>
            <td> {{$member->created_at}} </td>
        </tr>

        <tr>
            <td> <b>Updated At</b> </td>
            <td> {{$member->updated_at}} </td>
        </tr>

        <tr>
        <td> <a href="{{URL::previous()}}" class="btn btn-dark" style="font-weight:bold;margin-top:50px">Back</a> </td>
        <td> <a href="/members" class="btn btn-dark" style="font-weight:bold; float:right; margin-right:90%;margin-top:50px;width:100px;">Go To All</a> </td>
        </tr>
    </table>
@endsection