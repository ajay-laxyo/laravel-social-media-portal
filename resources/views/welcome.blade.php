<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="frontend/img/favicon.ico">
      <title>Day-Night Zone</title>
      <link href="https://www.bootdey.com/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/animate.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/timeline.css') }}" rel="stylesheet">
    <script src="{{ asset('frontend/assets/js/jquery.1.11.1.min.js') }}"></script>
    <script src="https://www.bootdey.com/bootstrap-3.3.5/js/bootstrap.min.js"></script>
   </head>
   <body class="welcome-page animated fadeIn">
      <nav class="navbar navbar-default navbar-fixed-top navbar-principal welcome-nav">
         <div class="container">
            <div class="navbar-header"><span style="margin-left: 20px"> <a class="navbar-brand" href="#"> <img src="frontend/img/logo-white.png" class="img-logo"> <b>Day-Night Zone</b> </a> </span></div>
         </div>
      </nav>
      <div class="row-welcome" style="margin: 0; background-image: url('{{ asset('frontend/img/Post/welcome-bg.png') }}');">
         <div class="row-body">
            <div class="welcome-inner">
               <div class="welcome-message welcome-text-shadow">
                  <div class="welcome-title"> Welcome </div>
                  <div class="welcome-desc"> to our social network </div>
                  <div class="welcome-about"> share your memories, connect with others, make new friends. </div>
               </div>
               <div class="welcome-inputs animated fadeInRight">
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email"> 
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    {{-- <a href="profile.html" name="login" class="btn btn-primary">Login</a> --}}
                    <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                    <span class="forgot-password-link text-shadow">
                     {{-- <a href="#">Forgot your password?</a> --}} 

                     @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    </span> 
                  </form>

                  <br>


                  <form method="POST" action="{{ route('register') }}" >
                    @csrf 
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Your Full name" >
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email address">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Create Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password"> 

                    <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      {{-- <div class="welcome-full">
         <div class="row-body">
            <div class="welcome-users-inner animated fadeInRight">
               <div class="welcome-user"> <a href="profile.html"> <img src="frontend/img/Friends/guy-3.jpg" class="img-circle"> </a> </div>
               <div class="welcome-user"> <a href="profile.html"> <img src="frontend/img/Friends/woman-1.jpg" class="img-circle"> </a> </div>
               <div class="welcome-user"> <a href="profile.html"> <img src="frontend/img/Friends/guy-2.jpg" class="img-circle"> </a> </div>
               <div class="welcome-user"> <a href="profile.html"> <img src="frontend/img/Friends/woman-2.jpg" class="img-circle"> </a> </div>
               <div class="welcome-user"> <a href="profile.html"> <img src="frontend/img/Friends/guy-5.jpg" class="img-circle"> </a> </div>
               <div class="welcome-user"> <a href="profile.html"> <img src="frontend/img/Friends/woman-3.jpg" class="img-circle"> </a> </div>
               <div class="welcome-user"> <a href="profile.html"> <img src="frontend/img/Friends/guy-8.jpg" class="img-circle"> </a> </div>
               <div class="welcome-user"> <a href="profile.html"> <img src="frontend/img/Friends/woman-4.jpg" class="img-circle"> </a> </div>
               <div class="welcome-user"> <a href="profile.html"> <img src="frontend/img/Friends/guy-9.jpg" class="img-circle"> </a> </div>
               <div class="welcome-user"> <a href="profile.html"> <img src="frontend/img/Friends/woman-7.jpg" class="img-circle"> </a> </div>
            </div>
         </div>
      </div> --}}
      <footer class="welcome-footer">
         <div class="container">
            <p> </p>
            <div class="footer-links"> <a href="{{ route('terms_of_use') }}">Terms of Use</a> | <a href="{{ route('private_policy') }}">Privacy Policy</a> | <a href="{{ route('contact') }}">Contact</a> | <a href="{{ route('about') }}">About</a> </div>
            Copyright © Company - All rights reserved 
            <p></p>
         </div>
      </footer>
      <script type="text/javascript">
         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
         
         ga('create', 'UA-49755460-1', 'auto', {'allowLinker': true});
         ga('require', 'linker');
         ga('linker:autoLink', ['bootdey.com','www.bootdey.com','demos.bootdey.com'] );
         ga('send', 'pageview');
      </script>
   </body>
</html>