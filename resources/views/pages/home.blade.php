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
	          <li class="nav-item {{ Request::path() === '/match' ? 'active' : ''}}"><a href="{{ route('match') }}" class="nav-link">Games</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item cta"><a href="#" class="nav-link">Join Battle</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('frontend/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Championship Of The Realm</h1>
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">A true knight is fuller of bravery in the midst, than in the beginning of danger.</p>
						<p class="d-flex align-items-center">
							<a href="https://www.youtube.com/embed/tgbNymZ7vqY" class="icon-video popup-vimeo d-flex justify-content-center align-items-center mr-3">
    						<span class="ion-ios-play"></span>
    					</a>
    					<span class="watch">Watch Battle</span>
						</p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
    	<div class="container">
	    	<div class="row">
					<div class="col-md-12">
						<div class="game-wrap-1 ftco-animate p-4">
							<div class="row p-2">
								<div class="col-md-6 pb-4 pb-lg-0 col-lg-3">
									<div class="text d-flex">
										<div class="team-logo d-flex">
											<div class="img" style="background-image: url(frontend/images/team-1.jpg);"></div>
											<div class="img img-2" style="background-image: url(images/team-2.jpg);"></div>
										</div>
										<div class="team-name pl-3">
											<h3><span>Knights Warrior</span> <span>Mighty Falcons</span></h3>
										</div>
									</div>
								</div>
								<div class="col-md-6 pb-4 pb-lg-0 col-lg-3">
									<div class="text">
										<div class="img"></div>
										<h3 class="league">FIFA Champions League</h3>
										<span>Semi-Final</span>
									</div>
								</div>
								<div class="col-md-6 pb-4 pb-lg-0 col-lg-4">
									<div class="text">
										<div id="timer" class="d-flex mb-0">
										  <div class="time" id="days"></div>
										  <div class="time pl-3" id="hours"></div>
										  <div class="time pl-3" id="minutes"></div>
										  <div class="time pl-3" id="seconds"></div>
										</div>
									</div>
								</div>
								<div class="col-md-6 pb-4 pb-lg-0 col-lg-2">
									<div class="text">
										<p class="mb-0"><a href="#" class="btn btn-primary py-3">Buy Tickets</a></p>
									</div>
								</div>
							</div>
		        </div>
					</div>
	    	</div>
	    </div>
    </section>
		
		<section class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
	          <div class="heading-section ftco-animate">
	          	<span class="subheading">Recent Match</span>
	            <h2 class="mb-4">Great Victory of Warrior</h2>
	          </div>
	          <div class="scoreboard mb-5 mb-lg-0">
			  @if($tanding->score == '0') 
	          	<div class="divider text-center"><span>{{ \Carbon\Carbon::parse($tanding->updated_at)->format('d M Y')}}</span></div>
				  @else
				  <div class="divider text-center"><span>{{ \Carbon\Carbon::parse($semifinal->updated_at)->format('d M Y')}}</span></div>
				  @endif
				  <div class="d-sm-flex mb-4">
		          	<div class="sport-team d-flex align-items-center">
	          			<div class="img logo" style="background-image: url(frontend/images/team-3.jpg);"></div>
									<div class="text-center px-1 px-md-3 desc">
									@if($tanding->score == '0')
										<h4 class="score lost"><span>LOSE</span></h4>
									@elseif($semifinal->score =='2') 
										<h4 class="score lost"><span>LOSE</span></h4>
									@endif

									@if($tanding->score == '0')
										<h4 class="team-name">Bang Loser</h4>
									@else
										<h4 class="team-name">{{$semifinal->team->nama}}</h4>
									@endif
									</div>
		          	</div>
		          	<div class="sport-team d-flex align-items-center">
	          			<div class="img logo order-sm-last" style="background-image: url(frontend/images/team-2.jpg);"></div>
									<div class="text-center px-1 px-md-3 desc">
									@if($tanding->score == '0')
										<h3 class="score win"><span>WIN</span></h3>
									@elseif($final->score =='3') 
										<h3 class="score win"><span>WIN</span></h3>
									@endif

									@if($tanding->score == '0')
										<h4 class="team-name">Bang Jago</h4>
									@else
										<h4 class="team-name">{{$final->team->nama}}</h4>
									@endif
									</div>
		          	</div>
	          	</div>
	          	<div class="text-center">
		          	<p><a href="#" class="btn btn-primary">More Details</a></p>
		          </div>
	          </div>
					</div>
					<div class="col-lg-6 d-flex align-items-stretch">
						<div class="img d-flex align-items-center justify-content-center py-5" style="background-image: url(frontend/images/victory.jpg); width: 100%;">
							<p class="text-center mb-0 py-5">
								<a href="https://vimeo.com/45830194" class="icon-video-2 popup-vimeo d-flex justify-content-center align-items-center mr-3">
	    						<span class="ion-ios-play"></span>
	    					</a>
	    					<small style="color: rgba(255,255,255,1); font-size: 16px;">Watch Highlights</small>
    					</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-game-schedule ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-12 heading-section ftco-animate mb-4">
          	<span class="subheading">Jadwal Tournament</span>
					</div>
				</div>
				<div class="row ftco-animate">
					<div class="col-md-12 carousel-game-schedule owl-carousel">
				
				@foreach($tournament as $tour)
				<div class="item">
							<div class="game-schedule">
		          	<div class="sport-team d-flex align-items-center">
	          			<div class="img logo" style="background-image: url({{ URL::to('/') }}/gambar-logo/{{ $tour->logo }});"></div>
									<div class="pl-4 desc">
										<span class="venue">{{$tour->tournament_category->nama}}</span>
										<h4 class="team-name">{{$tour->nama}}</h4>
										<span class="date">{{ \Carbon\Carbon::parse($tour->tanggal)->format('d M Y')}}</span>
									</div>
		          	</div>
		          </div>
	          </div>
			  @endforeach
	         
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <div class="icon"><span class="flaticon-american-football"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Pick Tournament</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <div class="icon"><span class="flaticon-american-football-1"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Join Battle</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <div class="icon"><span class="flaticon-lockers"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Matchamaking</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <div class="icon"><span class="flaticon-strategy"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Battle Royale</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-team img" style="background-image:url(frontend/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-6 heading-section heading-section-white text-center ftco-animate">
          	<span class="subheading">Team List</span>
            <h2 class="mb-4">Our Brave <span>Team</span></h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="carousel-team owl-carousel">
					@foreach($team as $teams)
    				<div class="item">
    					<div class="team-wrap text-center">
		    				<div class="img" style="background-image: url({{ URL::to('/') }}/gambar-team/{{ $teams->logo }});"></div>
		    				<div class="text">
		    					<h3 class="mb-0">{{$teams->nama}}</h3>
		    					<span class="position">{{$teams->discord}}</span>
		    				</div>
	    				</div>
    				</div>
					@endforeach
    				
    				
    				
    			</div>
    		</div>
    	</div>
    </section>
   	
    
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Info</span>
            <h2>Recent Info</h2>
          </div>
        </div>
        <div class="row d-flex">

		@foreach($info->slice(0, 4) as $infos)
          <div class="col-md-6 col-lg-3 ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url({{ URL::to('/') }}/gambar-banner/{{ $infos->banner }});">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center p-2 pr-3 mb-4 topp">
              		<div class="one">
              			<span class="day mr-1">{{ \Carbon\Carbon::parse($infos->created_at)->format('d')}}</span>
              		</div>
              		<div class="two">
              			<span class="yr">{{ \Carbon\Carbon::parse($infos->created_at)->format('Y')}}</span>
              			<span class="mos">{{ \Carbon\Carbon::parse($infos->created_at)->format('M')}}</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">{{ $infos->rules }}</a></h3>
              </div>
            </div>
          </div>
		  @endforeach

		  
         
        </div>
      </div>
    </section>
		
		<section class="ftco-subscribe img" style="background-image: url(frontend/images/bg_1.jpg);">
      <div class="overlay">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-10 text-wrap text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our upcoming match</h2>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-10">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
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