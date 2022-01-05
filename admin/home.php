<?php
session_start();
include('includes/config.php');

?>
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
<style>
.h {
  font-family: "Segoe Print";
   font-size: 40px;
   font-weight: bold;
   text-shadow: 0 0 5px #fff,
                 0 0 10px #fff, 
                 0 0 20px green, 
                 0 0 30px green, 
                 0 0 40px green, 
                 0 0 55px green, 
                 0 0 70px green;
}


body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}


* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  width: 80%;
  height:40%;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: auto;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 6s;
  animation-name: fade;
  animation-duration: 6s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

.div1 {
  width: 80%;
  height: auto;
  border: 2px solid purple;
  box-shadow: 5px 10px;
}

.div2 {
  width: 80%;
  height: auto;
  border: 2px solid purple;
  box-shadow: 5px 10px;
}

.div3 {
  width: 80%;
  height: 50%;
  border: 2px solid purple;
  	box-shadow: 5px 10px;
}   
   </style>
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
					<h1 class="h">BOMBAY LIBRARY</h1>										
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
                            <li><a href="issued-books.php">Contact Us</a></li>                          
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br></br>
<p></p>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="assets/img/slideshow1.jpg" width="100%" height="85%" >
  <div class="text">#knowledge</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="assets/img/slideshow2.jpg"  width="100%" height="100%">
  <div class="text">#wisdom</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="assets/img/slideshow4.jpg"  width="100%" height="100%">
  <div class="text">#Live Forever</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


<p><p><p></p></p></p>
<br></br>





<center><div class="div1">
<br></br>
<center><img src="assets/img/logo.jpg"></center>
<center><p>Our Organization is operating this website since 2002.</p></center>
<center><p>We have been certified by Library of Congress — Washington D.C.</p></center>
<br></br>
</div>
</center>

<br></br><br></br>


<center><div class="div2">
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



<center><div class="div3">
<br></br>

<center><img src="assets/img/Contact us.jpg"></center>

</div>

<br></br>


</body>

</html>
