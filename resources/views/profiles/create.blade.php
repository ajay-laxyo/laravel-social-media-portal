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
	  <h2>Fill your details</h2>
	  <form action="{{ route('profiles.store') }}" method="POST" enctype="multipart/form-data">
	  	@csrf
	    <div class="form-group">
	      <label for="email">About You:</label>
	      <input type="text" class="form-control" placeholder="Enter about you" name="about_u">
	    </div>
	    <div class="form-group">
	      <label>Date Of Birth:</label><br>
	      <input type="date" class="form-control" name="dob">
	    </div>
	    <div class="form-group">
	      <label for="email">Gender:</label>
	      <input type="radio" name="gender" value="male">Male
	      <input type="radio" name="gender" value="female">Female
	      <input type="radio" name="gender" value="other">Other
	    </div>
	    <div class="form-group">
	      <label for="pwd">Mobile Number:</label>
	      <input type="text" class="form-control" placeholder="Enter your contact number" name="mobile">
	    </div>

	    <div class="form-group">
	      <label for="email">Alternate Number:</label>
	      <input type="text" class="form-control" placeholder="Enter alternate number" name="alt_number">
	    </div>
	    <div class="form-group">
	      <label for="pwd">Address:</label>
	      <input type="text" class="form-control" placeholder="Enter your address" name="address">
	    </div>
	    <div class="form-group">
	      <label for="email">City:</label>
	      <input type="text" class="form-control" placeholder="Enter city" name="city">
	    </div>
	    <div class="form-group">
	      <label for="pwd">State:</label>
	      <input type="text" class="form-control" placeholder="Enter State" name="state">
	    </div>
	    <div class="form-group">
	      <label for="email">Country:</label>
	      <input type="text" class="form-control" placeholder="Enter country" name="country">
	    </div>
	    <div class="form-group">
	      <label for="pwd">School:</label>
	      <input type="text" class="form-control" placeholder="Enter your school details" name="school">
	    </div>
	    <div class="form-group">
	      <label for="email">College:</label>
	      <input type="text" class="form-control" placeholder="Enter your college details" name="college">
	    </div>
	    <div class="form-group">
	      <label for="pwd">University:</label>
	      <input type="text" class="form-control" placeholder="Enter University" name="university">
	    </div>
	    <div class="form-group">
	      <label for="email">Designation:</label>
	      <input type="text" class="form-control" placeholder="Enter your designation
	      " name="designation">
	    </div>
	    <div class="form-group">
	      <label for="pwd">Work At:</label>
	      <input type="text" class="form-control" placeholder="Enter your working status" name="work_at">
	    </div>

	    <div class="form-group">
	      <label for="email">Language:</label>
	      <input type="text" class="form-control" placeholder="Enter language " name="language">
	    </div>
	    <div class="form-group">
	      <label for="pwd">Religion:</label>
	      <input type="text" class="form-control" placeholder="Enter Religion" name="religion">
	    </div>
	    <div class="form-group">
	      <label for="email">Profile Picture:</label>
	      <input type="file" class="form-control" placeholder="choose profile picture" name="pro_pic">
	    </div>
	    <div class="form-group">
	      <label for="pwd">Cover Picturte:</label>
	      <input type="file" class="form-control" placeholder="choose cover picture" name="cover_pic">
	    </div>
	    <button type="submit" class="btn btn-dark">Submit</button>
	  </form>

	  <br>

	</div>
</div>


@include('layouts-frontend.footer')
