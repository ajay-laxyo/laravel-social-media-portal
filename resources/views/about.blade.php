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
{{-- <header class="fixed-top p-auto">
    <div class="container">
        <nav class="navbar navbar-expand p-0">
            <a class="navbar-brand mr-0 pr-4" href="index.html">
                <img src="master/images/logo.png" alt="logo">
            </a>
            <a href="javascript:void(0)" id="cls-btn">&times;</a>
            <div class="navbar-collapse nav-sec" id="sidenav">
                <ul class="navbar-nav mr-auto header-nav">
                   
                </ul>
                <ul class="navbar-nav mr-auto header-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="contact.html">
                            Contact
                        </a>
                    </li>
                </ul>
        </nav>
    </div>
</header>
 --}}
<section class="banner">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <h1>Let’s Create Something Awesome Together</h1>
        <h6>This is how we work, to make your project awesome !</h6>
        <a href="#" class="get-started-btn">get started</a>
    </div>
</section>

<section class="index-about-sec">
    <div class="layer">
        <div class="container">
            <h5 data-aos="zoom-in" data-aos-duration="1000">This is how we work, to make your project awesome !</h5>
            <p data-aos="zoom-in" data-aos-duration="1000">Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release
                of Letraset sheets containing Lorem Ipsum passages...
            </p>
            <ul class="row">
                <li class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="index-abt-content">
                        <h3>web designing</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            dummy
                            text ever since the 1500s, when an...</p>
                    </div>
                </li>
                <li class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-duration="1200">
                    <div class="index-abt-content">
                        <h3>domian registering</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            dummy
                            text ever since the 1500s, when an...</p>
                    </div>
                </li>
                <li class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-duration="1400">
                    <div class="index-abt-content">
                        <h3>wordpress development</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            dummy
                            text ever since the 1500s, when an...</p>
                    </div>
                </li>
                <li class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-duration="1600">
                    <div class="index-abt-content">
                        <h3>graphic design</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            dummy
                            text ever since the 1500s, when an...</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="index-services">
    <div class="container">
        <div class="services-filter">
            <div class="service-list">
                <h3 class="tab-link current" data-tab="tab-1">our portfolio</h3>
                <h3 class="tab-link" data-tab="tab-2">read articles</h3>
                <h3 class="tab-link" data-tab="tab-3">our clients</h3>
            </div>
            <div class="service-images">
                <ul id="tab-1" class="tab-content current">
                    <li data-aos="fade-up" data-aos-duration="1000">
                        <a href="portfolio.html">
                            <figure style="background:url(master/images/index-portfolio-1.jpg); background-position: center right"></figure>
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1200">
                        <a href="portfolio.html">
                            <figure style="background:url(master/images/index-portfolio-2.jpg); background-position: center"></figure>
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1400">
                        <a href="portfolio.html">
                            <figure style="background:url(master/images/index-portfolio-3.jpg);"></figure>
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1000">
                        <a href="portfolio.html">
                            <figure style="background:url(master/images/index-portfolio-4.jpg); background-position: center right"></figure>
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1200">
                        <a href="portfolio.html">
                            <figure style="background:url(master/images/index-portfolio-5.jpg);"></figure>
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1400">
                        <a href="portfolio.html">
                            <figure style="background:url(master/images/index-portfolio-6.jpg); background-position: center "></figure>
                        </a>
                    </li>
                </ul>
                <ul id="tab-2" class="tab-content article-section">
                    <li>
                        <a href="blogsingle.html">
                            <figure style="background:url(master/images/article-img.jpg); background-position: center right"></figure>
                            <h4>girl holding black jacket</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae iste deserunt a
                                rerum temporibus quidem consequuntur facilis fugit laborum reprehenderit!</p>
                            <a href="blogsingle.html" class="article-btn">read more</a>
                        </a>
                    </li>
                    <li>
                        <a href="blogsingle.html">
                            <figure style="background:url(master/images/article-img1.jpg);"></figure>
                            <h4>girl holding mug</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae iste deserunt a
                                rerum temporibus quidem consequuntur facilis fugit laborum reprehenderit!</p>
                            <a href="blogsingle.html" class="article-btn">read more</a>
                        </a>
                    </li>

                </ul>
                <ul id="tab-3" class="tab-content client-section">
                    <li>
                        <a href="blogsingle.html">
                            <figure style="background:url(master/images/article-img.jpg); background-position: center;"></figure>
                        </a>
                    </li>

                    <li>
                        <a href="blogsingle.html">
                            <figure style="background:url(master/images/article-img1.jpg); background-position: center;"></figure>
                        </a>
                    </li>

                    <li>
                        <a href="blogsingle.html">
                            <figure style="background:url(master/images/our-clients1.jpg); background-position: center;"></figure>
                        </a>
                    </li>

                    <li>
                        <a href="blogsingle.html">
                            <figure style="background:url(master/images/index-portfolio-2.jpg); background-position: center"></figure>
                        </a>
                    </li>

                    <li>
                        <a href="blogsingle.html">
                            <figure style="background:url(master/images/index-portfolio-6.jpg); background-position: center "></figure>
                        </a>
                    </li>

                    <li>
                        <a href="blogsingle.html">
                            <figure style="background:url(master/images/index-portfolio-3.jpg);"></figure>
                        </a>
                    </li>

                </ul>
                
            </div>
        </div>
    </div>
</section>

<section class="index-blog">
    <div class="layer">
        <div class="container">
            <h3 data-aos="zoom-in" data-aos-duration="1000">We write great web design articles, have a look on them</h3>
            <p data-aos="zoom-in" data-aos-duration="1000">Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the
                industry's type specimen book. It has survived not only five centuries, but also the leap into
                electronic typesetting,</p>

            <ul class="row">
                <li class="col-md-6">
                    <div class="overlay" data-aos="fade-up" data-aos-duration="1000">
                        <a href="blogsingle.html">
                            <div class="blog-img">
                                <figure><img src="master/images/img-1.jpg" alt="img-1" class="img-fluid"></figure>
                                <div class="blog-img-inner"></div>
                            </div>
                            <h5>
                                Girl wearing white frock holding coffee and posing for photo.
                            </h5>
                        </a>
                        <a href="blogsingle.html">read more</a>
                    </div>
                </li>
                <li class="col-md-6">
                    <div class="overlay" data-aos="fade-up" data-aos-duration="1300">
                        <a href="blogsingle.html">
                            <div class="blog-img">
                                <figure> <img src="master/images/img-2.jpg" alt="img-2" class="img-fluid"></figure>
                                <div class="blog-img-inner"></div>
                            </div>
                            <h5>
                                Man getting ready for photoshoot by wearing blue suit
                            </h5>
                        </a>
                        <a href="blogsingle.html">read more</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<footer>
    <div class="layer">
        <div class="container">
            <nav class="navbar navbar-expand  p-0">
                <a class="navbar-brand mr-0 pr-2 pr-sm-4" href="index.html">
                    <img src="master/images/logo.png" alt="logo">
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
                        <li class="nav-item active">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script src="{{ asset('master/js/script.js') }}"></script>

<script>
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>

</body>

</html>