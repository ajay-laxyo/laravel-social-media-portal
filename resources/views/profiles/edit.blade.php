@include('layouts-frontend.header')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container bg-white">
	<div class="card" style="padding-top: 50px">
		<div class="col-lg-12">
            <br>
            <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
            </div><br>
        </div>
        <br>
	  <h2>Update your details that you want :</h2>
	  <br>
	  <form action="{{ route('profiles.update', $data->id) }}" method="POST" enctype="multipart/form-data">
	  	@csrf
	  	@method('PUT')

	    <div class="form-group">
	      <label for="email">About You:</label>
	      <input type="text" class="form-control" placeholder="Enter about you" name="about_u" value="{{ $data->about_u }}">
	    </div>
	    <div class="form-group">
	      <label>Date Of Birth:</label><br>
	      <input type="date" class="form-control" name="dob" value="{{ $data->dob }}">
	    </div>
	    <div class="form-group">
	      <label >Gender:</label>
	      <input type="radio" name="gender" value="male" {{old('gender',$data->gender) == 'male' ? 'checked' : ''}}>Male
	      <input type="radio" name="gender" value="female" {{old('gender',$data->gender) == 'female' ? 'checked' : ''}}>Female
	      <input type="radio" name="gender" value="other" {{old('gender',$data->gender) == 'other' ? 'checked' : ''}}>Other
	    </div>
	    <div class="form-group">
	      <label for="pwd">Mobile Number:</label>
	      <input type="text" class="form-control" placeholder="Enter your contact number" name="mobile" value="{{ $data->mobile }}">
	    </div>

	    <div class="form-group">
	      <label for="email">Alternate Number:</label>
	      <input type="text" class="form-control" placeholder="Enter alternate number" name="alt_number" value="{{ $data->alt_number }}">
	    </div>
	    <div class="form-group">
	      <label for="pwd">Address:</label>
	      <input type="text" class="form-control" placeholder="Enter your address" name="address" value="{{ $data->address }}">
	    </div>
	    <div class="form-group">
	      <label for="email">City:</label>
	      <input type="text" class="form-control" placeholder="Enter city" name="city" value="{{ $data->city }}">
	    </div>
	    <div class="form-group">
	      <label for="pwd">State:</label>
	      <input type="text" class="form-control" placeholder="Enter State" name="state" value="{{ $data->state }}">
	    </div>
	    <div class="form-group">
	      <label for="email">Country:</label>
	      <input type="text" class="form-control" placeholder="Enter country" name="country" value="{{ $data->country }}">
	    </div>
	    <div class="form-group">
	      <label for="pwd">School:</label>
	      <input type="text" class="form-control" placeholder="Enter your school details" name="school" value="{{ $data->school }}">
	    </div>
	    <div class="form-group">
	      <label for="email">College:</label>
	      <input type="text" class="form-control" placeholder="Enter your college details" name="college" value="{{ $data->college }}">
	    </div>
	    <div class="form-group">
	      <label for="pwd">University:</label>
	      <input type="text" class="form-control" placeholder="Enter University" name="university" value="{{ $data->university }}">
	    </div>
	    <div class="form-group">
	      <label for="email">Designation:</label>
	      <input type="text" class="form-control" placeholder="Enter your designation" name="designation" value="{{ $data->designation }}">
	    </div>
	    <div class="form-group">
	      <label for="pwd">Work At:</label>
	      <input type="text" class="form-control" placeholder="Enter your working status" name="work_at" value="{{ $data->work_at }}">
	    </div>

	    <div class="form-group">
	      <label for="email">Language:</label>
	      <input type="text" class="form-control" placeholder="Enter language " name="language" value="{{ $data->language }}">
	    </div>
	    <div class="form-group">
	      <label for="pwd">Religion:</label>
	      <input type="text" class="form-control" placeholder="Enter Religion" name="religion" value="{{ $data->religion }}">
	    </div>
	    <div class="form-group">
	      <label for="email">Profile Picture:</label>
	      <input type="file" class="form-control" placeholder="choose profile picture" name="pro_pic">
	      <label> This is your current profile pic</label>
	      <img src="{{ url('storage/'.trim($data->pro_pic, 'public')) }}" height="90" width="90"> 
	    </div>
	    <div class="form-group">
	      <label for="pwd">Cover Picturte:</label>
	      <input type="file" class="form-control" placeholder="choose cover picture" name="cover_pic">
	      <label> This is your current covor pic</label>
	      <img src="{{ url('storage/'.trim($data->cover_pic, 'public')) }}" height="90" width="90"> 
	    </div>
	    <button type="submit" class="btn btn-dark">Submit</button>
	  </form>

	  <br>

	</div>
</div>


@include('layouts-frontend.footer')
