<?php
include("header.html");
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<style type="text/css">
		html,body{
			background-color: #800000;
			font-family: Verdana,sans-serif;
			color: white;
		}
		.mySlides {display: none}
		img {vertical-align: middle;
		height: 400px;
		}
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
		.prev:hover, .next:hover {
  		background-color: rgba(0,0,0,0.8);
			}
		.slideshow-container {
		  max-width: 1000px;
		  position: relative;
		  margin: auto;
		  padding: 10px;
		}
		.numbertext {
		  color: #f2f2f2;
		  font-size: 12px;
		  padding: 8px 12px;
		  position: absolute;
		  top: 0;
		}
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
		.fade {
  		-webkit-animation-name: fade;
  		-webkit-animation-duration: 1.5s;
  		animation-name: fade;
  		animation-duration: 1.5s;
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
		</style>
</head>
<body>
		<div>
			<h1 style="text-align: center">
				WELCOME TO 
			</h1>
		</div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 6</div>
  <img src="h1.jpg" width="100%";>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 6</div>
  <img src="h2.jpg" width="100%";>
</div>

<div class="mySlides fade">
  <div class="numbertext" >3 / 6</div>
  <img src="h3.jpg" width="100%";>
</div>

<div class="mySlides fade">
  <div class="numbertext" >4 / 6</div>
  <img src="h4.jpg" width="100%";>
</div>

<div class="mySlides fade">
  <div class="numbertext" >5 / 6</div>
  <img src="h5.jpg" width="100%";>
</div>

<div class="mySlides fade">
  <div class="numbertext" >6 / 6</div>
  <img src="h6.jpg" width="100%";>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
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
<div>
	<h3 style="font-family: cursive;text-align: center; font-style: italic;">If you believe in your idea, do it now</h3>
	<p style="font-family: serif; text-align: justify;padding: 20px;">Gone are the days when women would end up their entire life within the 4 walls of the house. Like the male counterparts, women nowadays are writing fresh stories of unprecedented success, with their wit and hard work. More and more women are expanding their entrepreneurial horizons and venturing into an unprecedented range of business areas. Women are the pillars of society and when women are empowered, the whole world is empowered Ministry of Micro, Small and Medium Enterprises (MSME) is empowering women entrepreneurs through its different schemes helping women spark their talent and build their own identity. 1.38 lakh projects have been set up by the women entrepreneurs under Prime Minister’s Employment Generation Programme (PMEGP) Scheme since inception and upto 23.01.2019.</p>
</div>
</body>
</html>
<?php
include("footer.html");
?>