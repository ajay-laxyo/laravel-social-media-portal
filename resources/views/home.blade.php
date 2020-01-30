@extends('layouts-frontend.main')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10 no-paddin-xs">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="cover-photo" style="background-image:url({{ url('storage/'.trim($user['cover_pic'], 'public')) }})"> <img src="{{ url('storage/'.trim($user['pro_pic'], 'public')) }}" class="profile-photo img-thumbnail show-in-modal">
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
                                        <li class="active"><a href="#"><i class="fa fa-tasks"></i>Timeline</a></li>
                                        <li><a href="{{ route('about_profile') }}"><i class="fa fa-info-circle"></i>About</a></li>
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
                                <li><i class="fa fa-suitcase"></i>Works at : <a href="#">{{ $user['work_at'] }}</a></li>
                                <li><i class="fa fa-calendar"></i>Born on : {{ $user['dob'] }}</li>
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
                    <div class="panel panel-default panel-groups">
                        <div class="panel-heading">
                            <h3 class="panel-title">Groups</h3></div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="col-xs-3 col-sm-6 col-md-3"> <img src="frontend/img/Likes/likes-5.png" alt="Group" class="img-responsive img-circle" /> </div>
                                    <div class="col-xs-9 col-sm-6"> <span class="name">Bootdey competitors</span> </div>
                                    <div class="clearfix"></div>
                                </li>
                                <li class="list-group-item">
                                    <div class="col-xs-3 col-sm-6 col-md-3"> <img src="frontend/img/Likes/likes-1.png" alt="Group" class="img-responsive img-circle" /> </div>
                                    <div class="col-xs-9 col-sm-6"> <span class="name">Git in action</span> </div>
                                    <div class="clearfix"></div>
                                </li>
                                <li class="list-group-item">
                                    <div class="col-xs-3 col-sm-6 col-md-3"> <img src="frontend/img/Likes/likes-6.png" alt="Group" class="img-responsive img-circle" /> </div>
                                    <div class="col-xs-9 col-sm-6"> <span class="name">Bootdey Snippets</span> </div>
                                    <div class="clearfix"></div>
                                </li>
                                <li class="list-group-item">
                                    <div class="col-xs-3 col-sm-6 col-md-3"> <img src="frontend/img/Likes/likes-2.png" alt="Group" class="img-responsive img-circle" /> </div>
                                    <div class="col-xs-9 col-sm-6"> <span class="name">Html 5 live</span> </div>
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 no-paddin-xs">
                    <div class="panel profile-info">
                        <form action="{{ route('store_timeline') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <textarea class="form-control" rows="2" placeholder="Whats in your mind today?" name="content"></textarea>
                          <div class="panel-footer">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-map-marker"></i></a></li>
                                <li onclick="document.getElementById('uploadfile').click()"><a id="btnfile"><i class="fa fa-camera"></i></a></li>
                                <li><a href="#"><i class=" fa fa-film"></i></a></li>
                                <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                               <input id="uploadfile" type="file" name="timeline_pic" style="display: none">
                           <button type="submit" class="btn btn-info pull-right">Post</button>
                           </ul>
                          </div>
                        </form>
                    </div>

{{-- /////////////////////////////////////////// --}}
{{-- my timeline start from here --}}
@foreach($timeline_img as $img)
    <div class="panel panel-white post panel-shadow">
        <div class="post-heading">
            <div class="pull-left image"> 
                <img src="{{ url('storage/'.trim($user['pro_pic'], 'public')) }}" class="avatar" alt="user profile image"> 
            </div>
            <div class="pull-left meta">
                <div class="title h5"> <a href="#" class="post-user-name">{{ $user_name->name }}</a> 
                    @if($img->pic_type == 'cover_pic')
                    uploaded a new cover photo. 
                    @elseif($img->pic_type == 'profie_pic')
                    uploaded a new profile photo.
                    @elseif($img->pic_type == 'timeline_pic')
                    uploaded a new timeline photo.
                    @elseif(empty($img->pic_type))
                    uploaded a new story.
                    @endif
                </div>
                <h6 class="text-muted time">5 seconds ago</h6> 
            </div>
        </div>
        @if(!empty($img->pics) && empty($img->content)) 
        <div class="post-image">
            <img src="{{ url('storage/'.trim($img['pics'], 'public')) }}" class="image show-in-modal" alt="image post"> 
        </div>
        @elseif((!empty($img->pics)) && (!empty($img->content)))
        <p style="margin-left: 15px"> {{ $img->content }}</p><br>
        <div class="post-image">
            <img src="{{ url('storage/'.trim($img['pics'], 'public')) }}" class="image show-in-modal" alt="image post"> 
        </div>
        <div class="post-description">
            
            <div class="stats">
                <a href="#" class="stat-item"> <i class="fa fa-thumbs-up icon"></i> 228 </a>
                <a href="#" class="stat-item"> <i class="fa fa-retweet icon"></i> 128 </a>
                <a href="#" class="stat-item"> <i class="fa fa-comments-o icon"></i> 3 </a>
            </div>
        </div>
        @elseif(empty($img->pics))
        <div class="post-description">
            <p>{{ $img->content }}</p>
            <div class="stats">
                <a href="#" class="stat-item"> <i class="fa fa-thumbs-up icon"></i> 228 </a>
                <a href="#" class="stat-item"> <i class="fa fa-retweet icon"></i> 128 </a>
                <a href="#" class="stat-item"> <i class="fa fa-comments-o icon"></i> 3 </a>
            </div>
        </div>
        @endif
        <div class="post-footer">
            <input class="form-control add-comment-input" placeholder="Add a comment..." type="text">
            <ul class="comments-list">
                <li class="comment">
                    <a class="pull-left" href="#"> 
                        <img class="avatar" src="frontend/img/Friends/guy-3.jpg" alt="avatar"> 
                    </a>
                    <div class="comment-body">
                        <div class="comment-heading">
                            <h4 class="comment-user-name"><a href="#">     Antony andrew lobghi</a>
                            </h4>
                            <h5 class="time">7 minutes ago</h5> 
                        </div>
                        <p>This is a comment bla bla bla</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

@endforeach
                 
                    <div class="panel panel-white post-load-more panel-shadow text-center">
                        <button class="btn btn-default"><i class="fa fa-refresh"></i>Load More...</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<script type="text/javascript">
   $("#btnfile").click(function () {
       $("#uploadfile").click();
   });
</script>