@extends('layouts-frontend.main')
@section('content')
<div class="container container-timeline" style="margin-top:100px;">
      <div class="col-md-10 no-paddin-xs">
         <div class="col-md-5 no-paddin-xs">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title">Profile</h3>
               </div>
               <div class="panel-body"> 
                @if(!empty($user->pro_pic))
                  <img src="{{ url('storage/'.trim($user->pro_pic, 'public')) }}" class="home-avatar img-thumbnail" alt="user profile image">
                @else
                  <img src="frontend/img/Friends/guy-2.jpg" class="home-avatar img-thumbnail" alt="user profile image">
                  @endif
                  <a href="#">{{ Auth::user()->name }}</a> 
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title">People You May Know</h3>
               </div>
               <div class="panel-body">

{{-- loop start here  --}}
      @foreach($new_friend_list as $friends_list)
         @if($friends_list['user']->id != Auth::user()->id)

            <div class="notification-row" id="list_{{$friends_list['user']->id}}">
               <div class="notification-padding">
                  <div class="sidebar-fa-image img-may-know">
                     <img class="notifications" src="{{ url('storage/'.trim($friends_list->pro_pic, 'public')) }}">
                  </div>
                  <div class="sidebar-fa-text">
                        <b><a href="#"> {{ $friends_list['user']->name }} </a></b>
                        <br>
                        <br>
                        <button class="btn btn-info" type="submit" id="friendReq" data-id="{{ $friends_list['user']->id }}">
                           <i class="fa fa-user-plus">Add Friend</i>
                        </button>
                    
                  </div>
               </div>
            </div>
         @endif
      @endforeach
{{-- loop end here  --}}

{{-- paginate links --}}      
      {!! $new_friend_list->links() !!}
{{-- paginate links --}}      

               </div>
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

{{-- users profile pic, name and image or content type --}}
        <div class="post-heading">
            <div class="pull-left image"> 
                <img src="{{ url('storage/'.trim($img['profilePic']->pro_pic, 'public')) }}" class="avatar" alt="user profile image"> 
            </div>
            <div class="pull-left meta">
                <div class="title h5"><a href="#" class="post-user-name">{{ $img['profilePic']['user']->name }}</a>              
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
{{-- users profile pic and name and image or content type end --}}


{{-- if only image(pro or cover pic) posted --}}
        @if(!empty($img->pics) && empty($img->content))
        <div class="post-image">
            <img src="{{ url('storage/'.trim($img->pics, 'public')) }}" class="image show-in-modal" alt="image post"> 
        </div>
{{-- if only image(pro or cover pic) posted end --}}


{{-- when both image and content posted --}}
        @elseif((!empty($img->pics)) && (!empty($img->content)))
        <p style="margin-left: 15px"> {{ $img->content }}</p>
        <div class="post-image">
            <img src="{{ url('storage/'.trim($img->pics, 'public')) }}" class="image show-in-modal" alt="image post"> 
        </div>
{{-- when both image and content posted end --}}        

{{-- if only content posted --}}
        @elseif(empty($img->pics))
        <div class="post-description">
         
            <p>{{ $img->content }}</p>
            
        </div>
        @endif
{{-- if only content posted end --}}

{{-- like count section  --}}       
        <div class="post-description">
            <div class="stats">
                <a href="#" class="stat-item"> <i class="fa fa-thumbs-up icon"></i> 228 </a>
                <a href="#" class="stat-item"> <i class="fa fa-retweet icon"></i> 128 </a>
                <a href="#" class="stat-item"> <i class="fa fa-comments-o icon"></i> 3 </a>
            </div>
        </div>
{{-- like count section end --}}

{{-- comment form section --}}
        <div class="post-footer">
         <form name="formComment" id="formComment" action="{{ route('comment') }}" method="POST" >
            @csrf
            <input type="hidden" name="pics_id" value=" {{ $img->id }} ">
            <input type="hidden" name="user_id" value=" {{ Auth::user()->id }} ">
            <input type="text" id="text" class="form-control add-comment-input" placeholder="Add a comment..." autocomplete="off" name="comment" required="">
         </form>
 {{-- comment form section end--}}

{{-- comment listing here  --}}
         @foreach($timeline_comment as $coment)
            @if($img->id == $coment->pics_id)
               <ul class="comments-list">
                   <li class="comment">
                       <a class="pull-left" href="#"> 
                           <img class="avatar" src="{{ url('storage/'.trim($coment['profilePic']->pro_pic, 'public')) }}" alt="avatar"> 
                       </a>
                       <div class="comment-body">
                           <div class="comment-heading">
                               <h4 class="comment-user-name"><a href="#">{{ $coment['profilePic']['user']->name }}</a>
                               </h4>
                               <h5 class="time">7 minutes ago</h5> 
                           </div>
                           <p>{{ $coment->comment }}</p>
                       </div>
                   </li>
               </ul>
            @endif
         @endforeach
{{-- comment listing section end  --}}

        </div>
    </div>
@endforeach
{{-- my timeline end here --}}
{{-- //////////////////////////////////////////////// --}}


            <div class="panel panel-white post-load-more panel-shadow text-center"><button class="btn btn-default"><i class="fa fa-refresh"></i>Load More...</button>
            </div>
         </div>
      </div>
   </div>

<script type="text/javascript">
     
$(document).ready(function() {

   // for camera icon on click open image select option
   /*$("#btnfile").click(function () {
       $("#uploadfile").click();
   });*/

   $('#friendReq').on('click', function(e){

      var user_id = $(this).data('id');
      /*$.ajax({
         type:'POST',
         url:'/request',
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         data:{user_id: user_id},
         success:function(){
            alert(6);
         }
      });*/

      
         e.preventDefault();
         $.ajax({
            type:'get',
            url: "{{route('friendRequest')}}",
            //headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{user_id: user_id},
            success:function(res){

               $('list_'+res).attr('hidden', true);
            }
         })
      

      /**/
   })

});
      
</script>
@endsection

{{-- {{ route('comment') }} --}}

<script type="text/javascript">
// comment form

    /*$(document).keyup(function(event) {
        if (event.keyCode == 13) {
         $("#formComment").submit();
        }
      });*/

   
   /*$("#btnfile").click(function () {
       $("#uploadfile").click();
   });*/





</script>