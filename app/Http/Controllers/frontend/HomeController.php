<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\pro_cov_time_pics;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\User;
use Auth;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Profile::where('user_id', Auth::id())
                    ->first();
        $user_name = User::where('id', Auth::id())
                    ->first();
        $timeline_img = pro_cov_time_pics::where('user_id',Auth::id())->orderBy('id','desc')->get();

        return view('home', compact('user','user_name','timeline_img'));
    }

    public function about_profile()
    {
        // this is done by relation in profile model 
        
        $user = Profile::with('user')
                    ->where('user_id', Auth::id())
                    ->first();
        
        return view('profiles.about', compact('user'));
        
        //return $user;
        // $user = Profile::where('user_id', Auth::id())
        //             ->first();
        // $user_name = User::where('id', Auth::id())
        //             ->first();

    }

    public function store_timeline(Request $request)
    {
        $model = new pro_cov_time_pics;

        if($request->file('timeline_pic') != null)
        {
            $dir      = 'timeline_pic/'.date("Y").'/'.date("F");
            $file_ext = $request->file('timeline_pic')->extension();
            $filename = Auth::id().'_'.time().'_academic.'.$file_ext;
            $model->pics = $request->file('timeline_pic')->storeAs('public/'.$dir, $filename);
            $model->pic_type = 'timeline_pic';
        }
            
            $model->user_id = Auth::id();
            $model->content = $request->content;

            $model->save();
            
            return back();
    }
}
