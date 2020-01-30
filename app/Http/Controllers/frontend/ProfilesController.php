<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pro_cov_time_pics;
use App\Models\Profile;
use App\User;
use Auth;


class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Profile::where('user_id', Auth::id())
                    ->first();
        return view('profiles.create',compact('user'));
        //return view('profiles.edit',compact('data', 'user_name', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
        //     'about_u' => 'required',
             'dob' => 'required',
             'gender' => 'required',
        //     //'mobile' => 'required',
        //     //'alt_number' => 'required',
        //     //'address' => 'required',
        //     //'city' => 'required',
        //     //'state' => 'required',
        //     'country' => 'required',
        //     'school' => 'required',
        //     'college' => 'required',
        //     'university' => 'required',
        //     'designation' => 'required',
        //     'work_at' => 'required',
        //     'language' => 'required',
        //     'religion' => 'required',
        //     'pro_pic' => 'required',
        //     'cover_pic' => 'required',
            ]);

        
        
        $model = new Profile;
        
        $model1 = new pro_cov_time_pics;
        $model2 = new pro_cov_time_pics;

        if($request->file('pro_pic') != null)
        {
            $dir      = 'profile_pic/'.date("Y").'/'.date("F");
            $file_ext = $request->file('pro_pic')->extension();
            $filename = Auth::id().'_'.time().'_academic.'.$file_ext;
            $model->pro_pic = $request->file('pro_pic')->storeAs('public/'.$dir, $filename);

            $model1->pics = $request->file('pro_pic')->storeAs('public/'.$dir, $filename);
            $model1->user_id = Auth::id();
            $model1->pic_type = 'profie_pic';
            $model1->save();
        }
        
        if($request->file('cover_pic') != null)
        {
            $dir      = 'cover_pic/'.date("Y").'/'.date("F");
            $file_ext = $request->file('cover_pic')->extension();
            $filename = Auth::id().'_'.time().'_academic.'.$file_ext;
            $model->cover_pic    = $request->file('cover_pic')->storeAs('public/'.$dir, $filename);

            $model2->pics    = $request->file('cover_pic')->storeAs('public/'.$dir, $filename);
            $model2->user_id = Auth::id();
            $model2->pic_type = 'cover_pic';
            $model2->save();
        }


       
            $model->user_id = Auth::id();
            $model->about_u = $request->about_u;
            $model->dob = $request->dob;
            $model->gender = $request->gender;
            $model->mobile = $request->mobile;
            $model->alt_number = $request->alt_number;
            $model->address = $request->address;
            $model->city = $request->city;
            $model->state = $request->state;
            $model->country = $request->country;
            $model->school = $request->school;
            $model->college = $request->college;
            $model->university = $request->university;
            $model->designation = $request->designation;
            $model->work_at = $request->work_at;
            $model->language = $request->language;
            $model->religion = $request->religion;
            
            $model->save();
            
        return redirect()->route('home')
                        ->with('success','Profile updated successfully.');
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
        //return 4;
        if($id == Auth::id())
        {
            $user = Profile::where('user_id', Auth::id())
                    ->first();
            $user_name = User::where('id', Auth::id())
                    ->first();
            $data = Profile::where('user_id', Auth::id())->first();

            //return$data;

            //return dd($data);
            return view('profiles.edit',compact('data', 'user_name', 'user'));
        }
        else
        {
            return "you are not allowed to edit this profile";
        }
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

       // return $request->all();

        $model = Profile::findOrFail($id);
        $model1 = new pro_cov_time_pics;
        $model2 = new pro_cov_time_pics;

        if($request->file('pro_pic') != null)
        {
            $dir      = 'profile_pic/'.date("Y").'/'.date("F");
            $file_ext = $request->file('pro_pic')->extension();
            $filename = Auth::id().'_'.time().'_academic.'.$file_ext;
            $model->pro_pic = $request->file('pro_pic')->storeAs('public/'.$dir, $filename);

            $model1->pics = $request->file('pro_pic')->storeAs('public/'.$dir, $filename);
            $model1->user_id = Auth::id();
            $model1->pic_type = 'profie_pic';
            $model1->save();
        }
        
        if($request->file('cover_pic') != null)
        {
            $dir      = 'cover_pic/'.date("Y").'/'.date("F");
            $file_ext = $request->file('cover_pic')->extension();
            $filename = Auth::id().'_'.time().'_academic.'.$file_ext;
            $model->cover_pic    = $request->file('cover_pic')->storeAs('public/'.$dir, $filename);

            $model2->pics    = $request->file('cover_pic')->storeAs('public/'.$dir, $filename);
            $model2->user_id = Auth::id();
            $model2->pic_type = 'cover_pic';
            $model2->save();
        }


       
            $model->user_id = Auth::id();
            $model->about_u = $request->about_u;
            $model->dob = $request->dob;
            $model->gender = $request->gender;
            $model->mobile = $request->mobile;
            $model->alt_number = $request->alt_number;
            $model->address = $request->address;
            $model->city = $request->city;
            $model->state = $request->state;
            $model->country = $request->country;
            $model->school = $request->school;
            $model->college = $request->college;
            $model->university = $request->university;
            $model->designation = $request->designation;
            $model->work_at = $request->work_at;
            $model->language = $request->language;
            $model->religion = $request->religion;
            
            $model->save();
        
        //Profile::where('user_id', Auth::id())->update($model);

        return redirect()->route('home')
                        ->with('success','Profile updated successfully.');
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
