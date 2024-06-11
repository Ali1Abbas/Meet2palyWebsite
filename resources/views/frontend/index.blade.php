  

<!DOCTYPE html>
<html lang="en">
<head>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		
	.bg-1 { 
	  background-color: #1abc9c;
	  color: #ffffff;
	}
	.bg-2 { 
	  background-color: #474e5d;
	  color: #ffffff;
	}
	.bg-3 { 
	  background-color: #ffffff;
	  color: #555555;
	}
	.container-fluid {
	  padding-top: 70px;
	  padding-bottom: 70px;
	}


video {
  object-fit: cover;
  width: 100vw;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
}	

.games {
  font-size: 72px;
  background: -webkit-linear-gradient(left, #ffcc00 0%, #996600 100%);;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.epic {
  font-size: 72px;
  background: -webkit-linear-gradient(left, #ffcc00 0%, #996600 100%);;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.parghraph {
  font-size: 72px;
  background: -webkit-linear-gradient(left, #ffcc00 0%, #996600 100%);;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.nav-item{
	font-size: 72px;
  background: white;;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.btn{
	font-size: 72px;
  background: -webkit-linear-gradient(left, #ffcc00 0%, #996600 100%);;
  -webkit-background-clip: text;
}

.letsplay{
	font-size: 72px;
  background: -webkit-linear-gradient(left, #ffcc00 0%, #996600 100%);;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
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
  background:  #de9f3a ;
  min-height: 60px;
  padding: 10px 50px;
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
  margin: 20px 0;
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
  top: -80px;
  left: 0;
  width: 100%;
  height: 100px;
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

.feature{
	color: #fff;
}

</style>

	<meta charset="UTF-8">
	<meta name="description" content="Meet 2 Play">
	<meta name="keywords" content="Meet2Play, backgammon, ">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:url"                  content="https://onelink.to/m86vfg"/>
<meta property="og:type"               content="website" />
<meta property="og:title"                content="Meet2Play" />
<meta property="og:description"   content="First backgammon game of its kind with realtime video and audio features" />
<meta property="og:image"            content="https://www.linkpicture.com/q/Backgammon-BG-Red-2_1.png" />
<meta name="facebook-domain-verification" content="o1o9vdixd7qgn8wdot0nq0ir8dhbv3" />
	<link href="{!! asset('frontend/img/meet2play/Backgammon-Launcher-icon-Final.png') !!}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{!! asset('frontend/css/bootstrap.min.css') !!}"/>

	{{-- <link rel="stylesheet" href="{!! asset('frontend/css/owl.carousel.css') !!}"/> --}}
	<link rel="stylesheet" href="{!! asset('frontend/css/style.css') !!}"/>
	{{-- <link rel="stylesheet" href="{!! asset('frontend/css/animate.css') !!}"/> --}}

	{{-- <link rel="stylesheet" href="{!! asset('frontend/css/animate.css') !!}"/>

	<script src="{!! asset('frontend/js/jquery-3.2.1.min.js') !!}"></script>
	<script src="{!! asset('frontend/js/bootstrap.min.js') !!}"></script>
	<script src="{!! asset('frontend/js/owl.carousel.min.js') !!}"></script>
	<script src="{!! asset('frontend/js/jquery.marquee.min.js') !!}"></script>
	<script src="{!! asset('frontend/js/main.js') !!}"></script> --}}

	<link rel="stylesheet" href="{!! asset('frontend/css/test.css') !!}"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Meet2Play</title>
</head>
<body>
 
	{{-- home section --}}
	<section class="hero">

		<div class="main-width">
		
			<div class="home">
		
				<video autoplay muted loop src="{!! asset('frontend/img/meet2play/video/Meet 2 Play_chees.mp4') !!}"  type="video/mp4" >
					{{-- <source 	src="{!! asset('frontend/img/meet2play/video/Meet 2 Play _ The first social Backgammon game!.mp4') !!}"  type="video/mp4"> --}}
				  </video>
		</div>
	<header>

		<div class="logo">
	<h2> 
		<a href="#"> Meet2Play</a>
	</h2>
</div>
<nav class="navbar navbar-expand-md navbar-dark " style="background:transparent;">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
	  <ul class="navbar-nav">
		<li class="nav-item active">
		  <a class="nav-link" href="{!! route('frontend.index') !!}">Home <span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="{!! route('frontend.privacy') !!}">Privecy Policy</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="{!! route('frontend.contact-us') !!}">Support</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="{!! route('frontend.download') !!}">Install</a>
		  </li>
		<li class="btn" style="padding-top:10px;" ><a href="https://play.google.com/store/apps/details?id=com.meet2play.v1.com">Download</a></li>
	  </ul>
	</div>
  </nav>
{{-- <nav >
	<ul>

		<li class="active" ><a  href="{!! route('frontend.index') !!}">Home</a></li>
		<li ><a href="{!! route('frontend.privacy') !!}">Privecy Policy</a></li>
		<li ><a href="{!! route('frontend.contact-us') !!}">Support</a></li>
		<li class="btn" style="padding-top: 10px;" ><a href="https://play.google.com/store/apps/details?id=com.meet2play.v1.com">Download</a></li>
		
	</ul>
</nav> --}}
</header>
<div class="content">

	<div class="main-text">

		<h3 class="epic"> trending</h3>

		<h1 class="games" >	Real-Time</h1>

		<p class="parghraph"> Best Backgammon Game Out there</p>

		<a href="https://apps.apple.com/us/app/meet-2-play/id1594208918">Play Now </a>

		
			{{-- <a href="https://apps.apple.com/us/app/meet-2-play/id1594208918" class="site-btn" ><img class="ios" src="{!! asset('frontend/img/meet2play/App-store.png') !!}" alt=""></a>
	
			<a href="https://play.google.com/store/apps/details?id=com.meet2play.v1.com&hl=en&gl=US" class="site-btn"><img class="android" src="{!! asset('frontend/img/meet2play/Google-play.png') !!}" alt=""></a> --}}
	
		<a href="https://play.google.com/store/apps/details?id=com.meet2play.v1.com&hl=en&gl=US" class="cta"><i class="fa-solid fa-play"></i>Game Play </a>
		
		
		

	</div>

</div>
	</section>

	<section class="recent-game-section spad set-bg" style="padding-top: 40px; margin-bottom:60px; " data-setbg="{!! asset('frontend/img/meet2play/You Win Yellow-02.png') !!}" >
		
		<div class="container" style="border-radius: 40px;">
			<div class="section-title">
				<div class="fa-feature " style=" border-radius:20px; color:black;"><h2>Features</h2></div>


			</div>
			<div class="row">
				
				<div class="col-lg-4 col-md-4" >
					<div class="recent-game-item" style="border-radius:20px;  " >
						<div class="rgi-thumb"  >
							<img style="border-radius: 12px;" src="{!! asset('frontend/img/meet2play/Screenshot_20221218_104702_Meet2Play.jpg')!!}" >
						
						
						<div class="rgi-content" >
								<h5> SPIN AND GET REWARDS</h5>
							<p> Benefit from the daily spinner to receive free coints. Win, level up, unlock new boards as you play more. </p>
						</div>
					</div>	
			</div>


		</div>
		<div class="col-lg-4 col-md-4" style="padding-bottom: 40px;">
			<div class="recent-game-item" style="border-radius:20px; padding-bottom:70px; " >
				<div class="rgi-thumb" >
					<img style="border-radius: 12px;" src="{!! asset('frontend/img/meet2play/game.jpeg')!!}" >
				
				
				<div class="rgi-content" >
					<h5>REAL-TIME VIDEO & AUDIO </h5>
					<p>We brought to you real-time video and audio functionality to your match to create for you a unique experience </p>
				</div>
			</div>	
	</div>


</div>
					<div class="col-lg-4 col-md-4">
						<div class="recent-game-item" style="border-radius:20px;  " >
							<div class="rgi-thumb" >
								<img style="border-radius:12px;" src="{!! asset('frontend/img/meet2play/Screenshot_20221218_104803_Meet2Play.jpg')!!}" >
							
							
							<div class="rgi-content" >
								<h5>LEADERBOARD </h5>
								<p>We brought to you view leaders and top players of the game through our ranking system for having better experice </p>
								
								
								
							</div>
						</div>	
				</div>


			</div>
			
		</div>
	</section> 

	  <div class="container-fluid bg-2 text-center">

		<section class="recent-game-section spad set-bg" style="padding-top: 40px; margin-bottom:60px; " data-setbg="{!! asset('frontend/img/meet2play/You Win Yellow-02.png') !!}" >
		
			<div class="container" style="border-radius: 40px;">
				<div class="section-title">
					<div class="fa-feature " style=" border-radius:20px; color:black;"></div>
	
	
				</div>
				<div class="row">
					
					<div class="col-lg-4 col-md-4" >
						<div class="recent-game-item" style="border-radius:20px;  " >
							<div class="rgi-thumb"  >
								<img style="border-radius: 12px;" src="{!! asset('frontend/img/meet2play/Screenshot_20230524_102533_Meet2Play.jpg')!!}" >
							
							
							<div class="rgi-content" >
							
								<p>Meet2play provided with best features such as biographic and level, facebook share and analytics📉 for better illustration for the game.</p>
							</div>
						</div>	
				</div>
	
	
			</div>
			<div class="col-lg-4 col-md-4" style="padding-bottom: 40px;">
				<div class="recent-game-item" style="border-radius:20px; padding-bottom:70px; " >
					<div class="rgi-thumb" >
						<img style="border-radius: 12px;" src="{!! asset('frontend/img/meet2play/Screenshot_20230524_102545_Meet2Play.jpg')!!}" >
					
					
					<div class="rgi-content" >
					
						<p> Meet2play provide moden way of the game selection by contirbuting sophisticated atmosphere for users to increase user interactivity and engagement.  </p>
					</div>
				</div>	
		</div>
	
	
	</div>
						<div class="col-lg-4 col-md-4">
							<div class="recent-game-item" style="border-radius:20px;  " >
								<div class="rgi-thumb" >
									<img style="border-radius:12px;" src="{!! asset('frontend/img/meet2play/Screenshot_20230524_102606_Meet2Play.jpg')!!}" >
								
								
								<div class="rgi-content" >
									
									<p>Meet2play provide new technology in the game industry wich is video chat streaming inside the game and real-time communication for having better experince   </p>
									
									
								</div>
							</div>	
					</div>
	
	
				</div>
				
			</div>
		</section> 
		<h3> Latest Feature </h3>
		<p>Coins 💲
			If you are low on coins, you can keep enjoying Backgammon  by purchasing in-game currency or you can wait for the next hourly bonus to be ready. Alternatively, you can choose share it you will get a promotional and get just enough coins to get back to the game.</p>
		<p>Push notifications 📲
			Push notifications for the hourly bonus, in-game chat messages, and others are configurable via the Notifications panel in the Settings menu. The Settings menu is accessible from the icon on the top-right of the main menu.</p>
	  </div>
	  
	  <div class="container-fluid bg-3 text-center">    
		<h3>Enjoy playing</h3><br>
		<div class="row">
		  <div class="col-sm-4">
			<p class="feature">Online Multiplayer with fair and fast matchmaking for players of every skill level 🎲

			✔️ Real-time chat with emoticons and friend list 💬

 </p>
			
		  </div>
		  <div class="col-sm-4"> 
			<p class="feature">✔️  coin rewards and bragging rights 🏆

				✔️ Progress towards the top of local and global leader boards</p>
		
		  </div>
		  <div class="col-sm-4"> 
			<p class="feature">✔️ Login with Facebook, always have access to your Backgammon  account, discover your friends. 👍

				✔️ Collect free bonus coins every few hours 💰
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
		
			<!-- End Contact Us -->
		</div>
		<p style="font-size: 10px; padding-left:10px;">&copy;2023 Meet2Play | All Rights Reserved</p>
	  </footer>
	  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


	
	
</body>
</html>