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

<section class="banner innerpage-banner contact-banner">
    <div class="container">
        <h1 data-aos="fade-up" data-aos-duration="1000">Let’s Create Something Awsesome Together</h1>
    </div>
</section>
<section class="index-contact">
    <div class="layer">
        <div class="container">
            <h3 data-aos="zoom-in" data-aos-duration="1000">Got a project in mind? please contact and lets make awesome</h3>
            <p data-aos="zoom-in" data-aos-duration="1000">Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the
                industry's type specimen book. It has survived not only five centuries, but also the leap into
                electronic typesetting,</p>
            <form data-aos="fade-up" data-aos-duration="1000">
                <ul class="row">
                    <li class="col-md-4">
                        <input type="text" required class="w-100" placeholder="Your Name">
                    </li>
                    <li class="col-md-4">
                        <input type="email" required class="w-100" placeholder="Your Email Id">
                    </li>
                    <li class="col-md-4">
                        <input type="text" required class="w-100" placeholder="Your Mobile No">
                    </li>
                    <li class="col-12">
                        <textarea class="w-100" required placeholder="Your Message"></textarea>
                    </li>
                </ul>
                <button type="submit">alright submit it</button>
            </form>
        </div>
    </div>
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
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('contact') }}">
                                Contact Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('terms_of_use') }}">
                                Terms of Use
                            </a>
                        </li>

                        <li class="nav-item">
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