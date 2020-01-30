<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web_Design</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">

    <link rel="stylesheet" href="{{ asset('master/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('master/css/style.css') }}">
</head>



<section class="blog-page blogsingle">
    <h3 data-aos="fade-up" data-aos-duration="1000">Girl wearing white frock holding coffee and posing for photo.</h3>
    

    <h6>December 23, 2016 Posted by <span>Bizzy</span></h6>
    <p data-aos="fade-up" data-aos-duration="1000">Welcome to my personal travel blog, i love to travel the globe, i
        have been to so many beautiful places and met
        interesting people around the world, this website is my mirror of life. </p>
    <p data-aos="fade-up" data-aos-duration="1000">Welcome nal travel blog, i love to travel the globe, i have been to
        so <span> many beautiful</span> Welcome to
        my personal
        travel blog, i love to travel the globe, i have been to so many beautiful places and met interes Welcom y
        personal travel blog, i love to travel the globe, i have been to so many beautiful places and met interesting
        people around the world, this website is my mirror of life.
    </p>
    <p data-aos="fade-up" data-aos-duration="1000">Welcome to my personal travel blog, i love to travel the globe, i
        have been to so many beautiful...e world, this
        website is my mirror of life. <br> Welcome to my personal travel blog, i love to travel the globe, i have been
        to so many beautiful... </p>
    <div class="box">
        <h6>Welcome to my personal travel blog, i love to travel the globe, i have been to so many beautiful places and
            met interesting people around the world, this website is my mirror of life. </h6>
    </div>
    <p data-aos="fade-up" data-aos-duration="1000">Welcome to my personal travel blog, i love to travel the globe, i
        have been to so many beautiful places and met
        interesting people around the world, this website is my mirror of life. </p>
    <p data-aos="fade-up" data-aos-duration="1000">Welcome nal travel blog, i love to travel the globe, i have been to
        so <span> many beautiful</span> Welcome to
        my personal
        travel blog, i love to travel the globe, i have been to so many beautiful places and met interes Welcom y
        personal travel blog, i love to travel the globe, i have been to so many beautiful places and met interesting
        people around the world, this website is my mirror of life.
    </p>
    <p data-aos="fade-up" data-aos-duration="1000">Welcome to my personal travel blog, i love to travel the globe, i
        have been to so many beautiful...e world, this
        website is my mirror of life. <br> Welcome to my personal travel blog, i love to travel the globe, i have been
        to so many beautiful... </p>
    
    
</section>


<footer>
    <div class="layer">
        <div class="container">
            <nav class="navbar navbar-expand  p-0">
                <a class="navbar-brand mr-0 pr-2 pr-sm-4" href="index.html">
                    <img src="images/logo.png" alt="logo">
                </a>
                <div class="nav-sec">
                    <ul class="ml-md-auto">
                        @if(isset(auth()->user()->id))
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ url('/home') }}">
                                Home
                            </a>
                        </li>
                        @else
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ url('/') }}">
                                Home
                            </a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">
                                Contact Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('terms_of_use') }}">
                                Terms of Use
                            </a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('private_policy') }}">
                                Private Policy
                            </a>
                        </li>

                        <li>
                            <p class="m-0"> ©2018, All Rights Reserved. Designed By <a href="https://www.template.net/editable/websites">Template.net</a></p>
                        </li>
                    </ul>
            </nav>

        </div>
    </div>
</footer>

<button class="scrolltop-btn">
    <i class="fa fa-angle-up"></i>
</button>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script src="{{ asset('master/js/script.js') }}"></script>

</body>

</html>