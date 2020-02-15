<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pro_cov_time_comment;
use App\Models\pro_cov_time_pics;
use App\Models\FriendRequests;
use App\Models\Profile;
use App\User;
use Auth;
use DB;

class TimelinesController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Profile::where('user_id', Auth::id())
                    ->first();
        
        $timeline_img = pro_cov_time_pics::with('profilePic.user')->orderBy('id', 'desc')->get();

        $timeline_comment = pro_cov_time_comment::with('profilePic.user')->orderBy('id', 'desc')->get();
        
        $new_friend_list = Profile::with('user')->orderBy('id', 'desc')->paginate(5);
        //dd($new_friend_list);

     return view('timeline', compact('user','timeline_img', 'timeline_comment', 'new_friend_list'))->with('i',(request()->input('page',1)-1)*5);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeComment(Request $request)
    {
        $model = new pro_cov_time_comment;

        $model->pics_id = $request->pics_id;
        $model->user_id = $request->user_id;
        $model->comment = $request->comment;

        $model->save();

         return redirect()->back();
    }


    public function sentFriendRequest(Request $request)
    {
        //return $request->user_id;
        $model = new FriendRequests;

        $model->req_id = Auth::id();
        $model->user_id = $request->user_id;
        $model->save();


         return redirect()->back();;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
