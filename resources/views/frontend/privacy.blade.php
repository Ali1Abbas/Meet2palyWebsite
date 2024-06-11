<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Meet 2 Play</title>
		<meta charset="UTF-8">
		<meta name="description" content="Meet 2 Play">
		<meta name="keywords" content="Meet2Play, backgammon, ">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta property="og:url"                  content="https://onelink.to/m86vfg"/>
<meta property="og:type"               content="website" />
<meta property="og:title"                content="Meet2Play" />
<meta property="og:description"   content="First backgammon game of its kind with realtime video and audio features" />
<meta property="og:image"            content="https://www.linkpicture.com/q/WhatsApp-Image-2023-02-16-at-12.26.09.jpeg" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="facebook-domain-verification" content="o1o9vdixd7qgn8wdot0nq0ir8dhbv3" />
	<!-- Favicon -->   
	<link href="{!! asset('frontend/img/meet2play/Backgammon-Launcher-icon-Final.png') !!}" rel="shortcut icon"/>
	<link rel="stylesheet" href="{!! asset('frontend/css/test.css') !!}"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{!! asset('frontend/css/bootstrap.min.css') !!}"/>
	 {{-- <link rel="stylesheet" href="{!! asset('frontend/css/font-awesome.min.css') !!}"/> --}}
	{{-- <link rel="stylesheet" href="{!! asset('frontend/css/owl.carousel.css') !!}"/> --}}
	{{-- <link rel="stylesheet" href="{!! asset('frontend/css/style.css') !!}"/> --}}
	{{-- <link rel="stylesheet" href="{!! asset('frontend/css/animate.css') !!}"/>  --}}



	
	<link rel="stylesheet" href="{!! asset('frontend/css/owl.carousel.css') !!}"/>
	<link rel="stylesheet" href="{!! asset('frontend/css/style.css') !!}"/>
	<link rel="stylesheet" href="{!! asset('frontend/css/animate.css') !!}"/>

 <link rel="stylesheet" href="{!! asset('frontend/css/animate.css') !!}"/> 

	<script src="{!! asset('frontend/js/jquery-3.2.1.min.js') !!}"></script>
	<script src="{!! asset('frontend/js/bootstrap.min.js') !!}"></script>
	<script src="{!! asset('frontend/js/owl.carousel.min.js') !!}"></script>
	<script src="{!! asset('frontend/js/jquery.marquee.min.js') !!}"></script>
	<script src="{!! asset('frontend/js/main.js') !!}"></script>
	<style>

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");

/* * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
} */

/* body {
  display: flex;
  background: #333;
  justify-content: flex-end;
  align-items: flex-end;
  min-height: 100vh;
} */

.footer {
  position: relative;
  width: 100%;
  background:  #de9f3a  ;
  min-height: 60px;
  padding-top: 40px 10px;
  margin-top: 90px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.social-icon,
.menu {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 30px 0;
  flex-wrap: wrap;
}

.social-icon__item,
.menu__item {
  list-style: none;
}

.social-icon__link {
  font-size: 2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
}
.social-icon__link:hover {
  transform: translateY(-10px);
}

.menu__link {
  font-size: 1.2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
  text-decoration: none;
  opacity: 0.75;
  font-weight: 300;
}

.menu__link:hover {
  opacity: 1;
}

.footer p {
  color: #fff;
  margin: 15px 0 10px 0;
  font-size: 0.5rem;
  font-weight: 200;
}

.wave {
  position: absolute;
  top: -40px;
  left: 0;
  width: 100%;
  height: 70px;
  background: url("https://www.linkpicture.com/q/wave-1-1.png");
  background-size: 800px 100px;
}

.wave#wave1 {
  z-index: 500;
  opacity: 1;
  bottom: 0;
  animation: animateWaves 4s linear infinite;
}

.wave#wave2 {
  z-index: 499;
  opacity: 0.5;
  bottom: 10px;
  animation: animate 4s linear infinite !important;
}

.wave#wave3 {
  z-index: 500;
  opacity: 0.2;
  bottom: 15px;
  animation: animateWaves 3s linear infinite;
}

.wave#wave4 {
  z-index: 499;
  opacity: 0.7;
  bottom: 20px;
  animation: animate 3s linear infinite;
}

@keyframes animateWaves {
  0% {
    background-position-x: 1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

@keyframes animate {
  0% {
    background-position-x: -1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}
	</style>
	
		
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		
	
	</head>
<body style="background:radial-gradient(#f9d349,20%,#d57e12);">
	<!-- Header section -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark " style="background:transparent;">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
			  <ul class="navbar-nav">
				<li class="nav-item ">
				  <a class="nav-link" href="{!! route('frontend.index') !!}">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
				  <a class="nav-link" href="{!! route('frontend.privacy') !!}">Privecy Policy</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="{!! route('frontend.contact-us') !!}">Support</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{!! route('frontend.download') !!}">Install</a>
				  </li>
				<li class="btn" style="padding-bottom: 10px;" ><a href="https://play.google.com/store/apps/details?id=com.meet2play.v1.com">Download</a></li>
			  </ul>
			</div>
		  </nav>
</header>

		<div class="container-fluid spad">
			<h2 style="margin-bottom: 40px; padding-left:12px; color:white;" > Privacy Policy </h2>

		<div id="accordion">
			<div class="card">
			  <div class="card-header" id="headingOne">
				<h5 class="mb-0">
				  <button class="site-btn1" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
					What personal information do we collect from the player that visit our app?
				  </button>
				</h5>
			  </div>
		  
			  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
				<div class="card-body">
					We have integrated with Facebook and Google so players can access the app faster and easier and to provive a seamless login experience. During the login we store basic user information to create a unique profile for the players.
				</div>
			  </div>
			</div>

			<div class="card">
			  <div class="card-header" id="headingTwo">
				<h5 class="mb-0">
				  <button class="site-btn1" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					When do we collect information?
				  </button>
				</h5>
			  </div>
			  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				<div class="card-body">
					At the time of login we collect basic user/profile information.
				</div>
			  </div>
			</div>
			<div class="card">
			  <div class="card-header" id="headingThree">
				<h5 class="mb-0">
				  <button class="site-btn1" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					How do we use players' information?
				  </button>
				</h5>
			  </div>
			  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
				<div class="card-body">
					We use players information to display status in the user profile so they can send match challenge to their firends list.
				</div>
			  </div>
			</div>
			<div class="card">
				<div class="card-header" id="headingFour">
				  <h5 class="mb-0">
					<button class="site-btn1" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
						How do we protect users information?
					</button>
				  </h5>
				</div>
			
				<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
				  <div class="card-body">
					Only friends of the user can see the profile details and all of the user details are stored securely.
				  </div>
				</div>
			  </div>
			  <div class="card">
				<div class="card-header" id="headingFive">
				  <h5 class="mb-0">
					<button class="site-btn1" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
						Third-party disclosure (do we transfer, sell, or share) users data with third-parties?
					</button>
				  </h5>
				</div>
			
				<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
				  <div class="card-body">
					 We only have integration with third-party service providers for our services to work. Except this we don't share, transfer, sell or share the user data.
				  </div>
				</div>
			  <div class="card">
				<div class="card-header" id="headingSix">
				  <h5 class="mb-0">
					<button class="site-btn1" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
						How can our users delete their personal datas?
					</button>
				  </h5>
				</div>
			
				<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
				  <div class="card-body">
					We have provided a way for our users to delete their account in our app, and by that all of their personal datas will be removed from our records.
				
					<br>
					this includes:
					<br>
					- username and profile picture deletion
					<br>
					- level, scores and wallet money deletion
					<br>
					- friends and leaderboard deletation
					<br>
						   to delete personal data, users need to perform these actions:
						   <br>
							open Application  -> login -> click on profile picture -> click on delete account button		
							<br>		  </div>
				</div>
			  </div>
		  </div>
		</div>


		
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!------ Include the above in your HEAD tag ---------->
		
		  <footer class="footer">
			<div class="waves">
			  <div class="wave" id="wave1"></div>
			  <div class="wave" id="wave2"></div>
			  <div class="wave" id="wave3"></div>
			  <div class="wave" id="wave4"></div>
			</div>
			<ul class="social-icon">
			  <li class="social-icon__item"><a class="social-icon__link" href="#">
				  <ion-icon name="logo-facebook"></ion-icon>
				</a></li>
			  <li class="social-icon__item"><a class="social-icon__link" href="#">
				  <ion-icon name="logo-twitter"></ion-icon>
				</a></li>
			  <li class="social-icon__item"><a class="social-icon__link" href="#">
				  <ion-icon name="logo-linkedin"></ion-icon>
				</a></li>
			  <li class="social-icon__item"><a class="social-icon__link" href="#">
				  <ion-icon name="logo-instagram"></ion-icon>
				</a></li>
			</ul>
			<ul class="menu">
			  <li class="menu__item"><a class="menu__link" href="{!! route('frontend.index') !!}">Home</a></li>
			  <li class="menu__item"><a class="menu__link" href="{!! route('frontend.privacy') !!}">Privecy Policy</a></li>
			  <li class="menu__item"><a class="menu__link" href="{!! route('frontend.contact-us') !!}">Support</a></li>
			  <li class="menu__item"><a class="menu__link" href="{!! route('frontend.download') !!}">Install</a></li>
			  <li class="menu__item"><a class="menu__link" href="https://play.google.com/store/apps/details?id=com.meet2play.v1.com">Download</a></li>
			 
			</ul>
			
				<p style="font-size: 10px; padding-left:10px;">&copy;2023 Meet2Play | All Rights Reserved</p>	<!-- End Contact Us -->
			</div>
		
		  </footer>
		  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


		
		<!--====== Javascripts & Jquery ======-->
	<script src="{!! asset("frontend/js/jquery-3.2.1.min.js") !!}"></script>
	<script src="{!! asset("frontend/js/bootstrap.min.js") !!}"></script>
	<script src="{!! asset("frontend/js/owl.carousel.min.js") !!}"></script>
	<script src="{!! asset("frontend/js/jquery.marquee.min.js") !!}"></script>
	<script src="{!! asset("frontend/js/main.js") !!}"></script>
    </body>
	
</html>