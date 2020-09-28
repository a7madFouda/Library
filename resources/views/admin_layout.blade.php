<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- <link href="{{URL::asset('css/app.css')}}" rel="stylesheet" type="text/css"> -->


        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <style>
            /* start main rules */
            body{
                background-color: #F4F4F4F4;
                font-size: 16px;
            }
            .asterisk{
                font-size: 30px;
                position: absolute;
                top: 2px;
                right: 30px;
                color: #f00000;
            }
            /* end main rules*/
            /* Start Bootstrap Edits */
            .navbar-dark .navbar-brand {
                font-size: 1em;
                padding-right: .5rem;
                margin-right: 0rem;
                color: #3498db ;
            }
            .navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover  {
                background-color: #3498db ;
                border-radius: 3px;
            }
            .dropdown-menu {
                margin-top:10px auto;
                border: 0px;
                padding: 0px;
                background-color:#343a40;
            }
            .nav-link{
                padding-right: 0.5rem;
                padding-left: 0.6rem;
            }
            .dropdown-item:hover {
                background-color: #3498db ;
                border-radius: 3px;
                color: whitesmoke;
            }
            .dropdown-item {
                color: rgba(255, 255, 255, 0.5);
                padding: 0.4rem 1.5rem;
            }
            .form-control{
                position: relative;
            }
            .show-pass{
                position: absolute;
                top: 10px;
                right: -21px;
                font-size: 19px;
            }
            /* End Bootstrap Edits */
            /* Start Dashboard Page */
            .home-state{
                color : #fff ;
            }
            .home-state a{
                color : #fff ;
                text-decoration: none;
            }
            .home-state .state-member{
                background-color: #0097e6;
            }
            .home-state .state-pending{
                background-color: #e84118;
            }
            .home-state .state-item{
                background-color: #EE5A24;
            }
            .home-state .state-comment{
                background-color: #16a085;
            }
            .state{
                border : 1px solid #EEE;
                padding: 20px;
                margin : 5px 0px;
                text-align: center;
                border-radius: 8px;
            }
            .state span{
                font-size: 70px ;
                display: block;
            }
            .panel{
                margin : 20px 0px ;
            }
            .panel .panel-heading{
                border : 1px solid #EEE;
                border : 1px solid #EEE;
                padding :10px;

            }
            .panel .panel-body{
                background-color: white;
                border : 1px solid #EEE;
                padding :10px;
            }
            .panel .panel-heading .view{
                cursor: pointer;
            }
            /* End Dashboard Page */
            /* Start Categories Page */
            h1{
                margin : 40px 0px ;
                color : #666;
            }
            .form-group{
                padding: 10px;
            }
            /* End Categories Page */

        </style>
    </head>
    <body class="antialiased">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
        <a class="navbar-brand" href="dashboard.php"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="navbar-brand mr-3" href="/AdminDashboard">DASHBOARD</a></li>
            <li class="nav-item"><a class="nav-link" href="/categories">CATEGORIES</a></li>
            <li class="nav-item"><a class="nav-link" href="/allbooks">BOOKS</a></li>
            <li class="nav-item"><a class="nav-link" href="/Users">MEMBERS</a></li>
            <form class="form-inline my-2 my-lg-0" action="/search_result" method="get">
                <input class="form-control mr-sm-2" name='search' type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
            </ul>
            <ul class="nav navbar-nav ">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::guard('webadmin')->user()->name }}</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/homepage">Visit Library</a>
                <a class="dropdown-item" href="/edit_user/{{ Auth::guard('webadmin')->user()->id }}">Edit Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </div>
            </li>
            </ul>
        </div>
        </div>
    </nav>

        <div class="body">
            @yield('body')
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
