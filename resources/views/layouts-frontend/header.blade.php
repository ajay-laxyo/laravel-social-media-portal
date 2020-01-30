<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('frontend/img/favicon.ico') }}">
    <title>Day-Night Zone</title>
    <link href="https://www.bootdey.com/template_demo/dayzone/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/animate.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/timeline.css') }}" rel="stylesheet">
    <script src="{{ asset('frontend/assets/js/jquery.1.11.1.min.js') }}"></script>
    <script src="https://www.bootdey.com/template_demo/dayzone/bootstrap-3.3.5/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body class="animated fadeIn">
    <nav class="navbar navbar-default navbar-fixed-top navbar-principal">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="#"> <img src="{{ asset('frontend/img/logo-white.png') }}" class="img-logo"> <b>Day-Night Zone</b> </a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <div class="col-md-5 col-sm-4">
                    <form class="navbar-form">
                        <div class="form-group" style="display:inline;">
                            <div class="input-group" style="display:table;">
                                <input class="form-control" name="search" placeholder="Search..." autocomplete="off" type="text"> <span class="input-group-addon" style="width:1%;"> <span class="glyphicon glyphicon-search"></span> search</span>
                            </div>
                        </div>
                    </form>
                </div>
                
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{{ route('home') }}">{{ Auth::user()->name }} &nbsp;&nbsp;&nbsp;<img src="{{ url('storage/'.trim($user['pro_pic'], 'public')) }}" class="img-nav"></a></li>
                    <li><a href="{{ route('timeline') }}"><i class="fa fa-bars"></i>&nbsp;Home</a></li>
                    <li><a href="#"><i class="fa fa-comments"></i></a></li>
                    <li><a href="#"><i class="fa fa-globe"></i></a></li>
                    <li><a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();" class="nav-controller"><i class="fa fa-sign-out"></i>LogOut</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>