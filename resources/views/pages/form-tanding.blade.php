<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Paladin - Tournament and Info</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('frontend/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ url('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ url('frontend/css/aos.css') }}">

    <link rel="stylesheet" href="{{ url('frontend/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ url('frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('backend/css/bracket-front.css') }}">
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><span>Paladin</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
              <li class="nav-item {{ Request::path() === '/' ? 'active' : ''}}"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
	          <li class="nav-item {{ Request::path() === 'match' ? 'active' : ''}}"><a href="{{ route('match') }}" class="nav-link">Games</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item cta"><a href="{{ route('join')}}" class="nav-link">Join Battle</a></li>
            &nbsp &nbsp
            @guest
            <li class="nav-item"><a href="{{ url('login')}}" class="nav-link" style="color: white;">Login</a></li>
                @endguest
            @auth
            <form class="form-group" action="{{ url('logout') }}" method="POST">
                    @csrf
            <button class="btn btn-danger mt-3" type="submit">
                    Keluar
                    </button>
            </form>
          
            @endauth
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

		
		<section class="ftco-section">
			<div class="container">
				<div class="row">

                <div class="col-md-6">
                <form action="{{ route('register_team') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <strong><h4>Nama Team</h4></strong>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="discord" placeholder="Discord">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="no_hp" placeholder="No. HP">
                    </div>
                    <div class="form-group">
                        <label for="image">Logo Team</label>
                        <input type="file" name="logo" class="form-control">
                    </div>
                
                </div>

                <div class="col-md-3">
                    <br><br>
                    <strong><h4>Nama Player</h4></strong>
                    <div class="form-group">
                        <input type="text" class="form-control" name="player1" placeholder="Player 1">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="player2" placeholder="Player 2">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="player3" placeholder="Player 3">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="player4" placeholder="Player 4">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="player5" placeholder="Player 5">
                    </div>
                </div>

                <div class="col-md-3">
                    <br><br>
                    <strong><h4>Player Level</h4></strong>
                    <div class="form-group">
                        <input type="text" class="form-control" name="level1" placeholder="Level 1">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="level2" placeholder="Level 2">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="level3" placeholder="Level 3">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="level4" placeholder="Level 4">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="level5" placeholder="Level 5">
                    </div>
                   
                    <button type="submit" class="btn btn-primary btn-block">
                        Register Team
                    </button>
                   
                    </form>
                </div>

					</div>
				</div>
			</div>
		</section>


    <footer class="ftco-footer ftco-footer-2 ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Knights</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ url('frontend/js/jquery.min.js') }}"></script>
  <script src="{{ url('frontend/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ url('frontend/js/popper.min.js') }}"></script>
  <script src="{{ url('frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('frontend/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ url('frontend/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ url('frontend/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ url('frontend/js/owl.carousel.min.js') }}"></script>
  <script src="{{ url('frontend/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ url('frontend/js/aos.js') }}"></script>
  <script src="{{ url('frontend/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ url('frontend/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ url('frontend/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ url('frontend/js/google-map.js') }}"></script>
  <script src="{{ url('frontend/js/main.js') }}"></script>
      
  </body>
</html>