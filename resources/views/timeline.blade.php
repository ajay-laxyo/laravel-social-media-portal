@extends('layouts-frontend.main')
@section('content')
<div class="container container-timeline" style="margin-top:100px;">
      <div class="col-md-10 no-paddin-xs">
         <div class="col-md-5 no-paddin-xs">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title">Profile</h3>
               </div>
               <div class="panel-body"> <img src="{{ url('storage/'.trim($user->pro_pic, 'public')) }}" class="home-avatar img-thumbnail" alt="user profile image"> <a href="#">{{ Auth::user()->name }}</a> </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title">Friends activity</h3>
               </div>
               <div class="panel-body">
                  <div class="notification-row">
                     <div class="notification-padding">
                        <div class="sidebar-fa-image"><img class="notifications" src="frontend/img/Friends/guy-2.jpg"></div>
                        <div class="sidebar-fa-text"><b><a href="#">Carlos marthur</a></b> reviewed a <b><a href="#">publication</a></b>. <span class="timeago">5 days ago</span></div>
                     </div>
                  </div>
                  <div class="notification-row">
                     <div class="notification-padding">
                        <div class="sidebar-fa-image"><img class="notifications" src="frontend/img/Friends/woman-2.jpg"></div>
                        <div class="sidebar-fa-text"><b><a href="#">Hillary Markston</a></b> shared a <b><a href="#">publication</a></b>. <span class="timeago">5 min ago</span></div>
                     </div>
                  </div>
                  <div class="notification-row">
                     <div class="notification-padding">
                        <div class="sidebar-fa-image"><img class="notifications" src="frontend/img/Friends/woman-3.jpg"></div>
                        <div class="sidebar-fa-text"><b><a href="#">Leidy marshel</a></b> shared a <b><a href="#">publication</a></b>. <span class="timeago">5 min ago</span></div>
                     </div>
                  </div>
                  <div class="notification-row">
                     <div class="notification-padding">
                        <div class="sidebar-fa-image"><img class="notifications" src="frontend/img/Friends/woman-4.jpg"></div>
                        <div class="sidebar-fa-text"><b><a href="#">Presilla bo</a></b> shared a <b><a href="#">publication</a></b>. <span class="timeago">5 min ago</span></div>
                     </div>
                  </div>
                  <div class="notification-row">
                     <div class="notification-padding">
                        <div class="sidebar-fa-image"><img class="notifications" src="frontend/img/Friends/woman-4.jpg"></div>
                        <div class="sidebar-fa-text"><b><a href="#">Martha markguy</a></b> shared a <b><a href="#">publication</a></b>. <span class="timeago">5 min ago</span></div>
                     </div>
                  </div>
                  <div class="notification-row">
                     <div class="notification-padding">
                        <div class="sidebar-fa-image"><img class="notifications" src="frontend/img/Friends/guy-5.jpg"></div>
                        <div class="sidebar-fa-text"><b><a href="#">Carlos marthur</a></b> reviewed a <b><a href="#">publication</a></b>. <span class="timeago">5 days ago</span></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="panel panel-default panel-groups">
               <div class="panel-heading">
                  <h3 class="panel-title">Suggested Groups</h3>
               </div>
               <div class="panel-body">
                  <ul class="list-group">
                     <li class="list-group-item">
                        <div class="col-xs-3 col-sm-6 col-md-3"> <img src="frontend/img/Likes/likes-5.png" alt="Group" class="img-responsive img-circle"> </div>
                        <div class="col-xs-9 col-sm-6"> <span class="name">Bootdey competitors</span> </div>
                        <div class="clearfix"></div>
                     </li>
                     <li class="list-group-item">
                        <div class="col-xs-3 col-sm-6 col-md-3"> <img src="frontend/img/Likes/likes-1.png" alt="Group" class="img-responsive img-circle"> </div>
                        <div class="col-xs-9 col-sm-6"> <span class="name">Git in action</span> </div>
                        <div class="clearfix"></div>
                     </li>
                     <li class="list-group-item">
                        <div class="col-xs-3 col-sm-6 col-md-3"> <img src="frontend/img/Likes/likes-6.png" alt="Group" class="img-responsive img-circle"> </div>
                        <div class="col-xs-9 col-sm-6"> <span class="name">Bootdey Snippets</span> </div>
                        <div class="clearfix"></div>
                     </li>
                     <li class="list-group-item">
                        <div class="col-xs-3 col-sm-6 col-md-3"> <img src="frontend/img/Likes/likes-2.png" alt="Group" class="img-responsive img-circle"> </div>
                        <div class="col-xs-9 col-sm-6"> <span class="name">Html 5 live</span> </div>
                        <div class="clearfix"></div>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title">People You May Know</h3>
               </div>
               <div class="panel-body">
                  <div class="notification-row">
                     <div class="notification-padding">
                        <div class="sidebar-fa-image img-may-know"><img class="notifications" src="frontend/img/Friends/guy-2.jpg"></div>
                        <div class="sidebar-fa-text"><b><a href="#">Carlos marthur</a></b><br><a class="btn btn-info" href="#"><i class="fa fa-user-plus">Add Friend</i></a></div>
                     </div>
                  </div>
                  <div class="notification-row">
                     <div class="notification-padding">
                        <div class="sidebar-fa-image img-may-know"><img class="notifications" src="frontend/img/Friends/woman-1.jpg"></div>
                        <div class="sidebar-fa-text"><b><a href="#">Maria gustami</a></b><br><a class="btn btn-info" href="#"><i class="fa fa-user-plus">Add Friend</i></a></div>
                     </div>
                  </div>
                  <div class="notification-row">
                     <div class="notification-padding">
                        <div class="sidebar-fa-image img-may-know"><img class="notifications" src="frontend/img/Friends/woman-2.jpg"></div>
                        <div class="sidebar-fa-text"><b><a href="#">Angellina mcblown</a></b><br><a class="btn btn-info" href="#"><i class="fa fa-user-plus">Add Friend</i></a></div>
                     </div>
                  </div>
                  <div class="notification-row">
                     <div class="notification-padding">
                        <div class="sidebar-fa-image img-may-know"><img class="notifications" src="frontend/img/Friends/woman-3.jpg"></div>
                        <div class="sidebar-fa-text"><b><a href="#">Hillary marklein</a></b><br><a class="btn btn-info" href="#"><i class="fa fa-user-plus">Add Friend</i></a></div>
                     </div>
                  </div>
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
            {{-- <div class="panel panel-white post panel-shadow">
               <div class="post-heading">
                  <div class="pull-left image"> <img src="frontend/img/Profile/profile.jpg" class="avatar" alt="user profile image"> </div>
                  <div class="pull-left meta">
                     <div class="title h5"> <a href="#" class="post-user-name">Nickson Bejarano</a> uploaded a photo. </div>
                     <h6 class="text-muted time">5 seconds ago</h6>
                  </div>
               </div>
               <div class="post-image"> <img src="frontend/img/Post/place-234-87.jpg" class="image show-in-modal" alt="image post"> </div>
               <div class="post-description">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu quam fringilla, convallis risus in, luctus massa. Cras non lacus ut orci lobortis semper quis sit amet nunc. Donec at sem eget eros laoreet maximus in eu ligula</p>
                  <div class="stats"> <a href="#" class="stat-item"> <i class="fa fa-thumbs-up icon"></i> 228 </a> <a href="#" class="stat-item"> <i class="fa fa-retweet icon"></i> 128 </a> <a href="#" class="stat-item"> <i class="fa fa-comments-o icon"></i> 3 </a> </div>
               </div>
               <div class="post-footer">
                  <input class="form-control add-comment-input" placeholder="Add a comment..." type="text"> 
                  <ul class="comments-list">
                     <li class="comment">
                        <a class="pull-left" href="#"> <img class="avatar" src="frontend/img/Friends/guy-3.jpg" alt="avatar"> </a> 
                        <div class="comment-body">
                           <div class="comment-heading">
                              <h4 class="comment-user-name"><a href="#">Antony andrew lobghi</a></h4>
                              <h5 class="time">7 minutes ago</h5>
                           </div>
                           <p>This is a comment bla bla bla</p>
                        </div>
                     </li>
                     <li class="comment">
                        <a class="pull-left" href="#"> <img class="avatar" src="frontend/img/Friends/guy-2.jpg" alt="avatar"> </a> 
                        <div class="comment-body">
                           <div class="comment-heading">
                              <h4 class="comment-user-name"><a href="#">Jeferh Smith</a></h4>
                              <h5 class="time">3 minutes ago</h5>
                           </div>
                           <p>This is another comment bla bla bla</p>
                        </div>
                     </li>
                     <li class="comment">
                        <a class="pull-left" href="#"> <img class="avatar" src="frontend/img/Friends/woman-2.jpg" alt="avatar"> </a> 
                        <div class="comment-body">
                           <div class="comment-heading">
                              <h4 class="comment-user-name"><a href="#">Maria fernanda coronel</a></h4>
                              <h5 class="time">10 seconds ago</h5>
                           </div>
                           <p>Wow! so cool my friend</p>
                        </div>
                     </li>
                  </ul>
               </div>
            </div> --}}


{{-- /////////////////////////////////////////// --}}
{{-- my timeline start from here --}}
@foreach($timeline_img as $img)
   <?php //print_r($img->name); die; ?>
    <div class="panel panel-white post panel-shadow">
        <div class="post-heading">
            <div class="pull-left image"> 
                <img src="{{ url('storage/'.trim($user['pro_pic'], 'public')) }}" class="avatar" alt="user profile image"> 
            </div>
            <div class="pull-left meta">
                <div class="title h5"> <a href="#" class="post-user-name">{{ $img->name }}</a> 
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
            <img src="{{ url('storage/'.trim($img->pics, 'public')) }}" class="image show-in-modal" alt="image post"> 
        </div>
        @elseif((!empty($img->pics)) && (!empty($img->content)))
        <p style="margin-left: 15px"> {{ $img->content }}</p><br>
        <div class="post-image">
            <img src="{{ url('storage/'.trim($img->pics, 'public')) }}" class="image show-in-modal" alt="image post"> 
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


{{-- <div class="panel panel-white post panel-shadow">
   <div class="post-heading">
      <div class="pull-left image"> <img src="frontend/img/Profile/profile.jpg" class="avatar" alt="user profile image"> </div>
      <div class="pull-left meta">
         <div class="title h5"> <a href="#" class="post-user-name">Nickson Bejarano</a> uploaded a photo. </div>
         <h6 class="text-muted time">5 seconds ago</h6>
      </div>
   </div>
   <div class="post-image"> <img src="frontend/img/Post/game.jpg" class="image show-in-modal" alt="image post"> </div>
   <div class="post-description">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu quam fringilla, convallis risus in, luctus massa.</p>
      <div class="stats"> <a href="#" class="stat-item"> <i class="fa fa-thumbs-up icon"></i> 228 </a> <a href="#" class="stat-item"> <i class="fa fa-retweet icon"></i> 128 </a> <a href="#" class="stat-item"> <i class="fa fa-comments-o icon"></i> 3 </a> </div>
   </div>
   <div class="post-footer">
      <input class="form-control add-comment-input" placeholder="Add a comment..." type="text"> 
      <ul class="comments-list">
         <li class="comment">
            <a class="pull-left" href="#"> <img class="avatar" src="frontend/img/Friends/guy-3.jpg" alt="avatar"> </a> 
            <div class="comment-body">
               <div class="comment-heading">
                  <h4 class="comment-user-name"><a href="#">Antony andrew lobghi</a></h4>
                  <h5 class="time">7 minutes ago</h5>
               </div>
               <p>This is a comment bla bla bla</p>
            </div>
         </li>
         <li class="comment">
            <a class="pull-left" href="#"> <img class="avatar" src="frontend/img/Friends/guy-2.jpg" alt="avatar"> </a> 
            <div class="comment-body">
               <div class="comment-heading">
                  <h4 class="comment-user-name"><a href="#">Jeferh Smith</a></h4>
                  <h5 class="time">3 minutes ago</h5>
               </div>
               <p>This is another comment bla bla bla</p>
            </div>
         </li>
         <li class="comment">
            <a class="pull-left" href="#"> <img class="avatar" src="frontend/img/Friends/woman-2.jpg" alt="avatar"> </a> 
            <div class="comment-body">
               <div class="comment-heading">
                  <h4 class="comment-user-name"><a href="#">Maria fernanda coronel</a></h4>
                  <h5 class="time">10 seconds ago</h5>
               </div>
               <p>Wow! so cool my friend</p>
            </div>
         </li>
      </ul>
   </div>
</div> --}}
            {{-- <div class="panel panel-white post panel-shadow">
               <div class="post-heading">
                  <div class="pull-left image"> <img src="frontend/img/Profile/profile.jpg" class="avatar" alt="user profile image"> </div>
                  <div class="pull-left meta">
                     <div class="title h5"> <a href="#" class="post-user-name">Nickson Bejarano</a> uploaded a photo. </div>
                     <h6 class="text-muted time">5 seconds ago</h6>
                  </div>
               </div>
               <div class="post-image"> <img src="frontend/img/Post/place1-full2.jpg" class="image show-in-modal" alt="image post"> </div>
               <div class="post-description">
                  <p>This is a short description</p>
                  <div class="stats"> <a href="#" class="stat-item"> <i class="fa fa-thumbs-up icon"></i> 228 </a> <a href="#" class="stat-item"> <i class="fa fa-retweet icon"></i> 128 </a> <a href="#" class="stat-item"> <i class="fa fa-comments-o icon"></i> 3 </a> </div>
               </div>
               <div class="post-footer">
                  <input class="form-control add-comment-input" placeholder="Add a comment..." type="text"> 
                  <ul class="comments-list">
                     <li class="comment">
                        <a class="pull-left" href="#"> <img class="avatar" src="frontend/img/Friends/guy-3.jpg" alt="avatar"> </a> 
                        <div class="comment-body">
                           <div class="comment-heading">
                              <h4 class="comment-user-name"><a href="#">Antony andrew lobghi</a></h4>
                              <h5 class="time">7 minutes ago</h5>
                           </div>
                           <p>This is a comment bla bla bla</p>
                        </div>
                     </li>
                     <li class="comment">
                        <a class="pull-left" href="#"> <img class="avatar" src="frontend/img/Friends/guy-2.jpg" alt="avatar"> </a> 
                        <div class="comment-body">
                           <div class="comment-heading">
                              <h4 class="comment-user-name"><a href="#">Jeferh Smith</a></h4>
                              <h5 class="time">3 minutes ago</h5>
                           </div>
                           <p>This is another comment bla bla bla</p>
                        </div>
                     </li>
                     <li class="comment">
                        <a class="pull-left" href="#"> <img class="avatar" src="frontend/img/Friends/woman-2.jpg" alt="avatar"> </a> 
                        <div class="comment-body">
                           <div class="comment-heading">
                              <h4 class="comment-user-name"><a href="#">Maria fernanda coronel</a></h4>
                              <h5 class="time">10 seconds ago</h5>
                           </div>
                           <p>Wow! so cool my friend</p>
                        </div>
                     </li>
                  </ul>
               </div>
            </div> --}}
            <div class="panel panel-white post-load-more panel-shadow text-center"><button class="btn btn-default"><i class="fa fa-refresh"></i>Load More...</button>
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