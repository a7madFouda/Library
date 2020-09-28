@extends("..//admin_layout")
@section("body")
    <div class="container">
        <h1 class="text-center">Dashboard</h1>
        <div class="row home-state">
            <div class="col-md-4">
                <a href="/members">
                    <div class="state state-member">
                        Total Members
                        <span>{{$members->count()}}</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/allbooks">
                    <div class="state state-item">
                        Total Books
                        <span>{{$books->count()}}</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/categories">
                    <div class="state state-item">
                        Total categories
                        <span>{{$categories->count()}}</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php $latest_users = "4" ?>
                        <i class="fa fa-user"></i> Latest  Registered Members<i class="fa fa-plus float-right mr-2 view "></i>
                    </div>
                    <div class="panel-body full-view">
                        <ul class="list-group list-group-flush">
                            
                            
                        </ul>         
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php $latest_items = "4" ?>
                        <i class="fa fa-user"></i> Latest  Books<i class="fa fa-plus float-right mr-2 view "></i>
                    </div>
                    <div class="panel-body full-view">
                        <ul class="list-group list-group-flush">
                            
                            
                        </ul>         
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    
    @endsection