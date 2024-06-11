<!DOCTYPE html>
<html>
<head>
<title>Meet2Play</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text],input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
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
<meta property="og:image"            content="https://www.linkpicture.com/q/WhatsApp-Image-2023-02-16-at-12.26.09.jpeg" />
<meta name="facebook-domain-verification" content="o1o9vdixd7qgn8wdot0nq0ir8dhbv3" />
	<!-- Favicon -->   
	<link href="{!! secure_asset('frontend/img/meet2play/Backgammon-Launcher-icon-Final.png') !!}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="{!! secure_asset('frontend/css/test.css') !!}"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">
	<meta charset="UTF-8">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{!! secure_asset('frontend/css/bootstrap.min.css') !!}"/>
	<link rel="stylesheet" href="{!! secure_asset('frontend/css/font-awesome.min.css') !!}"/>
	<link rel="stylesheet" href="{!! secure_asset('frontend/css/owl.carousel.css') !!}"/>
	<link rel="stylesheet" href="{!! secure_asset('frontend/css/style.css') !!}"/>
	<link rel="stylesheet" href="{!! secure_asset('frontend/css/animate.css') !!}"/>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body style="background:radial-gradient(#f9d349,20%,#d57e12);">


  <nav class="navbar navbar-expand-md navbar-dark " style="background:transparent;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="{!! route('frontend.index') !!}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{!! route('frontend.privacy') !!}">Privecy Policy</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{!! route('frontend.contact-us') !!}">Support</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{!! route('frontend.download') !!}">Install</a>
        </li>
      <li class="btn" style="padding-top:10px;" ><a href="https://play.google.com/store/apps/details?id=com.meet2play.v1.com">Download</a></li>
      </ul>
    </div>
    </nav>



<h3 style="padding-left:20px; margin-top:20px; color:white;" >Help and FeedBack</h3>

<div class="container" style="margin-top:70px;">
  <form method="post" action="{{route('contact.send')}}">
    {{ csrf_field() }}
    @if(Session::has("message_sent"))
    <div class="alert alert-success" role="alert">

    {{Session::get('message_sent')}}

    </div>

    @endif
    <label for="fname">Full Name</label>
    <input type="text" id="fname" name="fullname" required placeholder="Your Full Name">

    <label for="lname">Email</label>
    <input type="email" id="lname" name="email" required placeholder="Your Email">

    <label for="country">Mobile No</label>
    <input type="text" id="lname" name="mobile_no" required placeholder="Your Mobile Number">

    <label for="subject">Message</label>
    <textarea id="subject" name="message" required placeholder="Your Message" style="height:200px"></textarea>

    <input type="submit" value="Submit" style=" background: radial-gradient(#f9d349,20%,#d57e12);">
  </form>
</div>



</body>
</html>
