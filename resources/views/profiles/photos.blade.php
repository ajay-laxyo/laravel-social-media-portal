@extends('layouts-frontend.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 no-paddin-xs">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="cover-photo" style="background-image:url({{ url('storage/'.trim($user->cover_pic, 'public')) }})"> <img src="{{ url('storage/'.trim($user->pro_pic, 'public')) }}" class="profile-photo img-thumbnail show-in-modal">
                    <h2 class="cover-name">{{ $user_name->name }}</h2> </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel-options">
                    <div class="navbar navbar-default navbar-cover">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#profile-opts-navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            </div>
                            <div class="collapse navbar-collapse" id="profile-opts-navbar">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="{{ route('home') }}"><i class="fa fa-tasks"></i>Timeline</a></li>
                                    <li class="active"><a href="{{ route('about_profile') }}"><i class="fa fa-info-circle"></i>About</a></li>
                                    <li><a href="#"><i class="fa fa-users"></i>Friends</a></li>
                                    <li><a href="#"><i class="fa fa-file-image-o"></i>Photos</a></li>
                                    <li><a href="#"><i class="fa fa-comment"></i>Messages</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-md-10 no-paddin-xs">
                <div class="col-md-5 user-detail no-paddin-xs">
                    <div class="panel panel-default panel-user-detail">
                        <div class="panel-body">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-suitcase"></i>Works at : <a href="#">{{ $user_name->work_at }}</a></li>
                                <li><i class="fa fa-calendar"></i>Born on : {{ $user_name->dob }}</li>
                                <li><i class="fa fa-rss"></i>Followed by <a href="#">51 People</a></li>
                            </ul>
                        </div>

                        @if(empty($user))
                        <div class="panel-footer text-center"> <a href="{{ route('profiles.create') }}" class="btn btn-info">Complate Profile</a>
                        </div>
                        @else
                        <div class="panel-footer text-center"> <a href="{{ route('profiles.edit', auth()->user()->id) }}" class="btn btn-info">Update Profile</a>
                        </div>

                        @endif
                    </div>
                    <div class="panel panel-default panel-friends">
                        <div class="panel-heading"> <a href="#" class="pull-right">View all&nbsp;<i class="fa fa-share-square-o"></i></a>
                            <h3 class="panel-title">Friends</h3></div>
                        <div class="panel-body text-center">
                            <ul class="friends">
                                <li>
                                    <a href="#"> <img src="frontend/img/Friends/woman-4.jpg" title="Jhoanath matew" class="img-responsive tip"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="frontend/img/Friends/woman-3.jpg" title="Martha creawn" class="img-responsive tip"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="frontend/img/Friends/guy-2.jpg" title="Jeferh smith" class="img-responsive tip"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="frontend/img/Friends/woman-9.jpg" title="Linda palma" class="img-responsive tip"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="frontend/img/Friends/guy-9.jpg" title="Lindo polmo" class="img-responsive tip"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="frontend/img/Friends/guy-5.jpg" title="andrew cartson" class="img-responsive tip"> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading"> <a href="#" class="pull-right">View all&nbsp;<i class="fa fa-share-square-o"></i></a>
                            <h3 class="panel-title">Photos</h3></div>
                        <div class="panel-body text-center">
                            <ul class="photos">
                                <li>
                                    <a href="#"> <img src="frontend/img/Photos/5.jpg" alt="photo 1" class="img-responsive show-in-modal"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="frontend/img/Photos/2.jpg" alt="photo 2" class="img-responsive show-in-modal"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="frontend/img/Photos/3.jpg" alt="photo 3" class="img-responsive show-in-modal"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="frontend/img/Photos/7.jpg" alt="photo 4" class="img-responsive show-in-modal"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="frontend/img/Photos/5.jpg" alt="photo 5" class="img-responsive show-in-modal"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="frontend/img/Photos/4.jpg" alt="photo 6" class="img-responsive show-in-modal"> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-default panel-likes">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-thumbs-o-up"></i>&nbsp;Likes</h3></div>
                        <div class="panel-body">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox-likes">
                                    <div class="item active">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-3">
                                                <a href="#" class="thumbnail"><img src="frontend/img/Likes/likes-5.png" alt="Like"></a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-3">
                                                <a href="#" class="thumbnail"><img src="frontend/img/Likes/likes-6.png" alt="Like"></a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-3">
                                                <a href="#" class="thumbnail"><img src="frontend/img/Likes/likes-1.png" alt="Like"></a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-3">
                                                <a href="#" class="thumbnail"><img src="frontend/img/Likes/likes-2.png" alt="Like"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-3">
                                                <a href="#" class="thumbnail"><img src="frontend/img/Likes/likes-3.png" class="show-in-modal" alt="Like"></a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-3">
                                                <a href="#" class="thumbnail"><img src="frontend/img/Likes/likes-4.png" class="show-in-modal" alt="Like"></a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-3">
                                                <a href="#" class="thumbnail"><img src="frontend/img/Likes/likes-5.png" class="show-in-modal" alt="Like"></a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-3">
                                                <a href="#" class="thumbnail"><img src="frontend/img/Likes/likes-6.png" class="show-in-modal" alt="Like"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-7 no-paddin-xs">
                    <div class="panel profile-info">
                        <form>
                            <textarea class="form-control input-lg p-text-area" rows="2" placeholder="Whats in your mind today?"></textarea>
                        </form>
                        <div class="panel-footer">
                            <button type="button" class="btn btn-info pull-right">Post</button>
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-map-marker"></i></a></li>
                                <li><a href="#"><i class="fa fa-camera"></i></a></li>
                                <li><a href="#"><i class=" fa fa-film"></i></a></li>
                                <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    
                    
                    
                    <div class="panel panel-white post-load-more panel-shadow text-center">
                        <button class="btn btn-default"><i class="fa fa-refresh"></i>Load More...</button>
                    </div>
                    <div class="panel panel-white post-load-more panel-shadow text-center">
                        <button class="btn btn-default"><i class="fa fa-refresh"></i>Load More...</button>
                    </div>
                    <div class="panel panel-white post-load-more panel-shadow text-center">
                        <button class="btn btn-default"><i class="fa fa-refresh"></i>Load More...</button>
                    </div>
                    <div class="panel panel-white post-load-more panel-shadow text-center">
                        <button class="btn btn-default"><i class="fa fa-refresh"></i>Load More...</button>
                    </div>
                    <div class="panel panel-white post-load-more panel-shadow text-center">
                        <button class="btn btn-default"><i class="fa fa-refresh"></i>Load More...</button>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection