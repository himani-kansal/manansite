<!DOCTYPE html>
<!--
	Interphase by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>MANAN</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="jquery.fadethis.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script>
 $(document).ready(function() {
  $(window).fadeThis({
  baseName:       "slide-",
  speed:          700, // <a href="http://www.jqueryscript.net/animation/">Animation</a> speed in milliseconds.
  easing:         "swing", // Animation easing.
  offset:         0, // <a href="http://www.jqueryscript.net/tags.php?/Scroll/">Scroll</a> offset, allowing to fire fading a little after or before the element appear.
  reverse:        true, // Make element disappear again when scrolled out, and fade again when scrolled in.
  distance:       50, // Element distance to its emplacement, before animation.
  scrolledIn:     null, // Function to call when the element come in viewport.
  scrolledOut:    null // Function to call when the element go out of the viewport.
  });
  });
  </script>
		<noscript>
			<link rel="stylesheet" href="css/bootstrap.css" />
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
		</noscript>
		 <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
          
		<!-- latest compiled and minified css -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">  
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	<style type="text/css">
		 .carousel-inner img {
      -webkit-filter: grayscale(60%);
      filter: grayscale(60%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .navbar {
      font-family:sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: #282828 !important;
  }
  </style>
	</head>
	<body class="landing" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
      <div class="spinner-layer spinner-blue">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

		<nav class="navbar navbar-default navbar-fixed-top" style="z-index:10000;" >
  <div class="container-fluid" style="z-index:100;">
    <div class="navbar-header" style="z-index:100;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <img src="images/index.png" width="190px" />
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage" style="font-size:11px;">HOME</a></li>
        <li><a href="#one" style="font-size:11px;">ABOUT US</a></li>
        <li><a href="#two" style="font-size:11px;">SECS</a></li>
      	<li><a href="#three" style="font-size:11px;">ALUMNIS</a></li>
      	 <li><a href="#three" style="font-size:11px;">MEMBERS</a></li>
      	<li><a href="#footer" style="font-size:11px;">CONTACT</a></li>  
      </ul>
    </div>
  </div>
</nav>
		<!-- Carousel
    ================================================== -->
    <!--carousel div -->
		<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
			<!-- Indicators,small dots on the bottom -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active" >
					<img src="images/pic9.jpg" alt="groupphoto1"/>
				</div>
				<div class="item">
					<img src="images/grp.jpg" alt="groupphoto2" />
				</div>
				<div class="item">
					<img src="images/pic3.jpg" alt="groupphoto3" />
				</div>
				<div class="item">
					<img src="images/pic2.jpg" alt="groupphoto4" />
				</div>
				<div class="item">
					<img src="images/pic4.jpg" alt="groupphoto5" />
				</div>
			</div>
			 <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
		</div>

		<!-- One -->
			<section id="one" class="wrapper style1 align-center" >
				<div class="container">
					<header >
						<h2>About Us</h2><br/>
						<p style="font-size:20px; line-height:350%;">
							
							Manan, A Technosurge, is the computer technical club of YMCAUST.
The club consists of the students who are passionate for coding,designing or developing.The community aims to learn together as a team and share the knowledge with all the other students to help all grow at a faster speed. Our motto is "LEARN COLLECTIVELY,GROW EXPONENTIALLY".
Manan organises events, contests, workshops and sessions in an elaborate and effective manner to benefit the college students. 
						</p>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2 align-center">
		<div class="main-container">
				<div class="container">
					<header>
						<h2>SECS</h2>
					</header>
					<div class="row">
						<section class="feature col-md-4 12u$(small) slide-left">
							<img class="image fit" src="images/pic01.jpg" alt="" />
							<h3 class="title">SAMEER GUPTA</h3>
							<p>(sameergupta1812@gmail.com)<br />
								</p><br />
								<p><a href="" target="_new" class="button alt big">Github</a></p>
						</section>
						<section class="feature col-md-4 12u$(small) slide-top ">
							<img class="image fit" src="images/pic02.jpg" alt="" />
							<h3 class="title">GARIMA DHINGRA</h3>
							<p>(garima.dhingra6@gmail.com)<br />
							</p><br />
							<p><a href="#" class="button alt big">Github</a></p>
						</section>
						<section class="feature col-md-4 12u$(small) slide-right ">
							<img class="image fit" src="images/pic02.jpg" alt="" />
							<h3 class="title">SATWICK DASH</h3>
							<p>(satwick1995@gmail.com)<br />
								</p><br />
								<p><a href="" target="_new" class="button alt big">Github</a></p>
						</section>

					</div>
				</div>
				</div>
			</section>
			<section id="three" class="wrapper style1 align-center"  >
				<div class="container">
						<div class="row">
						<div class="6u 12u(medium) 12u$(small)">
						<br /><br /><br /><br />
						<img src="images/laptop-keyboard-hands-353x179.jpg" style="border-radius:50%;" width="220px" /><br /><br /><br /><br /><br /><br />
						<a href="alumni.html" style="color:white; font-size:15px; border:1px solid black; background-color:#303030;
						padding:13px;">
						CONTACT ALUMNIS</a>	
						<br /><br /><br /><br /><br /><br /><br />
						</div>					
						<div class="6u 12u(medium) 12u$(small)">
						<br /><br /><br /><br />
						<img src="images/laptop-keyboard-hands-353x179.jpg" style="border-radius:50%;" width="220px" /><br /><br /><br /><br /><br /><br />
						<a href="members/index.html" style="color:white; font-size:15px; border:1px solid black; background-color:#303030;
						padding:13px;">
						CONTACT MEMBERS</a>	
						<br /><br /><br /><br /><br /><br /><br />
						</div>
						</div>
						
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row">
    <form class="8u 12u(medium) 12u$(small)">
      <div class="row">
        <div class="input-field 4u 6u$(small)">
        	<label for="first_name">Name</label>
          <input id="first_name" type="text" class="validate">
        </div>
      </div><br />
      <div class="row">
        <div class="input-field 4u 6u$(small)">
        <label for="email">Email</label>
          <input id="email" type="email" class="validate">
        </div>
      </div><br />
      <div class="row">
        <div class="input-field 8u 10u$(small)">
        <label for="textarea1">QUERY</label>
          <textarea id="textarea1" rows="5"></textarea>
        </div>
      </div><br />
      &nbsp;&nbsp;
      <input type="submit" value="Submit"   style="background-color:#383838 ;" class="submitbutton 4u$(small)">
      </form>
						<section class="4u$ 12u$(medium) 12u$(small)">
							<h3>Contact Us</h3>
							<ul class="icons">
								<li><a href="http://www.twitter.com/" class="icon rounded fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="http://www.facebook.com/" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="https://plus.google.com/" class="icon rounded fa-google-plus"><span class="label">Google+</span></a></li>
							</ul>
							<ul class="tabular">
								<li>
									<h3>Address</h3>
									YMCA University Of Science And Technology<br>
									Sector-6, Faridabad
								</li>
								<li>
									<h3>Mail</h3><br />
									<a href="#">manan@someone.com</a>
								</li>
								<li>
									<h3>Phone</h3><br />
									+91 129 231 0126
								</li>
							</ul>
						</section>
					</div>
					<ul class="copyright">

						<li>&copy; MANAN. All rights reserved.</li>
						<li>A website by: <a href="http://curience.in/creativehimani" style="color:white; font-style:italic; text-decoration:underline;">HIMANI KANSAL</a></li>
					</ul>
				</div>
			</footer>
			<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
})
</script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/typewriter.js"></script>

	</body>
</html>