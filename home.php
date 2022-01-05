
<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0){?> 
<html>
 <head><title>Library management system</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/home.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</head>
<body style="background-color: #F0F8FF;">
<div class="navbar navbar-inverse set-radius-zero" >
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand"	href="home.php" >
				<h1 class="h" style="font-family:Segoe Print;
				   font-size: 40px;
				   font-weight: bold;
				   text-shadow: 0 0 5px #fff,
								 0 0 10px #fff, 
								 0 0 20px green, 
								 0 0 30px green, 
								 0 0 40px green, 
								 0 0 55px green, 
								 0 0 70px green;">BOMBAY LIBRARY</h1>										
			</a>
		</div>
	</div>
</div>
    <!-- LOGO HEADER END-->
   
<section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="home.php" class="menu-top-active">HOME</a></li>
							<li><a href="index.php">LOGIN</a></li>                   
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>
<br></br>
<p></p>

<div class="slideshow-container">
	<div class="mySlides ">
		<img src="assets/img/slideshow1.jpg" width="100%" height="40%" >
		<div class="text">#knowledge</div>
	</div>
	<div class="mySlides ">
		<img src="assets/img/slideshow2.jpg"  width="100%" height="40%">
		<div class="text">#wisdom</div>
	</div>
	<div class="mySlides ">
		<img src="assets/img/slideshow4.jpg"  width="100%" height="40%">
		<div class="text">#Live Forever</div>
	</div>
</div>
<br>
<div style="text-align:center">
	<span class="dot" onclick="currentSlide(1)"></span> 
	<span class="dot" onclick="currentSlide(2)"></span> 
	<span class="dot" onclick="currentSlide(3)"></span> 
</div>
<script>
	var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 6000); // Change image every 2 seconds
}
</script>
<p><p><p></p></p></p>
<br></br>
<center>
	<div class="div1">
		<br></br>
		<center><img src="assets/img/logo.jpg"></center>
		<center><p>Our Organization is operating this website since 2002.</p></center>
		<center><p>We have been certified by Library of Congress — Washington D.C.</p></center>
		<br></br>
	</div>
</center>
<br></br><br></br>
<center>
	<div class="div2">
		<br></br>
		<center><img src="assets/img/knowledge.jpg"></center>
		<center><p>#Knowledge is power</p></center>
		<center><p>Sir Francis Bacon
		When Sir Francis Bacon published in his work, Meditationes Sacrae (1597), the saying: "knowledge itself is power", he most likely wanted to transmit the idea that having and sharing knowledge is the cornerstone of reputation and influence, and therefore power; all achievements emanate from this.</p></center>
		<br></br>
	</div>
</center>
<br></br>
<br></br>
<center>
	<div class="div3">
		<br></br>
		<center><img src="assets/img/Contact us.jpg"></center>
	</div>
</center>
<br></br>
</body>
</html>

<?php
}else{	
	header('location:index.php');
} 
?>