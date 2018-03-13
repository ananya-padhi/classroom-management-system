<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>project1</title>
	<style>
		#ul1 {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:white;	
	}
	.button {
    background-color: white;
    border: soft;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 26px;
    margin: 4px 2px;
    cursor: pointer;		
	}
	.dropdown {
    float: right;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 20px;    
    border: soft;
    outline: none;
    color: black;
    padding: 14px 16px;
    background-color: inherit;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.signpage {
    background: #959595;
    width: "100%";
    border-style:solid;
    padding: 25px;
    margin: 5px;
	align:center;
	height: 400px;
}
#li2 {
	float:right;
	}
	#li2 a {
    display: block;
    color: black;
    text-align: center;
    padding: 15px;
    text-decoration: none;
	font-size:20px;}
	#li1 {
    float: left;
	}
	#li1 a {
    display: block;
    color: black;
    text-align: center;
    padding: 15px;
    text-decoration: none;
	font-size:20px;
	
	
	* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}
.mySlides1 {display:none}
/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}
.slideshow-container1 {
  max-width: 320px;
  position: relative;
  margin: auto;
  float: left;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 50px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
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
.numbertext1 {
  color: black;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.dot1 {
  height: 8px;
  width: 8px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.8s ease;
}

.active {
  background-color: #717171;
}
.active1 {
  background-color: white;
}

/* Fading animation */
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
  .text {font-size: 11px}

	}
	
	</style>
	
</head>
<body  background="C:\xampp\htdocs\projpic\1.jpg" height=100% style="background-attachment:fixed;">

	<h3 align="center" ><img src="C:\xampp\htdocs\projpic\logo.png" style="width:100px;height:100px;float:right;"><u>NATIONAL INSTITUTE OF TECHNOLOGY ROURKELA</u><img src="C:\xampp\htdocs\projpic\pic1.png" style="width:100px;height:100px;float:left;"></h3>
	
	<h1 align="center" ><strong>CLASSROOM MANAGEMENT SYSTEM</strong></h1>
	
	<ul id="ul1">
		<li id="li1"><a href="con1.html">About </a></li>
		<li id="li2"><a href="reg.html">Register here </a></li>
		<div class="dropdown">
			<li id="li2" class="dropbtn">Login</li>
				<div class="dropdown-content">
					<a href="#login">STUDENT</a>
					<a href="#login">TEACHER</a>
				</div>
		</div>	
		
	</ul>
	
	<marquee height="20" style="padding-top:10px;"><strong>Winter vacations from 1st December</strong></marquee>
	
	<h2 align="center" >"Teachers can change lives with </br>   just the right mix of chalk and challenge."  </h2>
	
	<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="C:\xampp\htdocs\projpic\pic2.jpg" style="width:100%;height:75%;">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="C:\xampp\htdocs\projpic\p2.jpg" style="width:100%;height:75%;">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="C:\xampp\htdocs\projpic\p3.jpg" style="width:100%;height:75%;">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
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
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
function func()
{
	window.open("spage.html");
}
function func1()
{
	alert("Wrong userid or password");
}
</script>
<br/><br/>


	<div id="login">
	<div style="float:left;padding-left:100px;" width="50%" height="100%">
		<fieldset style="text-align:center;border:solid;">
			<legend>STUDENT SIGN-IN :</legend>
				<form action="process.php" method="POST">
					USERNAME:
					<input type="text" name="user" ><br/><br/><br/>
					PASSWORD:
					<input type="password" name="psd" ><br/><br/><br/>
					<input type="submit" value="Login">
					<input type="reset"  >
				</form>
		</fieldset>
	</div>
	<div style="float:right;padding-right:100px;" width="50%" height="100%">
		<fieldset style="text-align:center;border:solid;">
			<legend>TEACHER SIGN-IN :</legend>
				<form action="process1.php" method="POST">
					USERNAME:
					<input type="text" name="user1"  ><br/><br/><br/>
					PASSWORD:
					<input type="password" name="psd1" ><br/><br/><br/>
					<input type="submit" value="Login" >
					<input type="reset"  >
				</form>
		</fieldset>
	</div>
	</div>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<div id="about" align="center" style="background-color:#ffe39f;border:solid; height:100%; width:100%;font-size:25px;font-family:Bradley Hand ITC;" >
	<fieldset>

	
	
	<div class="slideshow-container1" style="float:left;">
	
	<div class="mySlides1 fade">
  
  <img src="C:\xampp\htdocs\projpic\2.jpg" style="width:320px;height:320px;">
  <div class="text"></div>
</div>

<div class="mySlides1 fade">
  <img src="C:\xampp\htdocs\projpic\3.jpg" style="width:320px;height:320px;">
  <div class="text"></div>
</div>

<div class="mySlides1 fade">
  <img src="C:\xampp\htdocs\projpic\4.jpg" style="width:320px;height:320px;">
  <div class="text"></div>
</div>

<div class="mySlides1 fade">
  <img src="C:\xampp\htdocs\projpic\5.jpg" style="width:320px;height:320px;">
  <div class="text"></div>
</div>
<div class="mySlides1 fade">
  <img src="C:\xampp\htdocs\projpic\6.jpg" style="width:320px;height:320px;">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot1"></span> 
  <span class="dot1"></span> 
  <span class="dot1"></span>
  <span class="dot1"></span> 
  <span class="dot1"></span>  
</div>

<script>
var slide1Index = 0;
showSlides1();

function showSlides1() {
    var i1;
    var slides1 = document.getElementsByClassName("mySlides1");
    var dots1 = document.getElementsByClassName("dot1");
    for (i1 = 0; i1 < slides1.length; i1++) {
       slides1[i1].style.display = "none";  
    }
    slide1Index++;
    if (slide1Index> slides1.length) {slide1Index = 1}    
    for (i1 = 0; i1 < dots1.length; i1++) {
        dots1[i1].className = dots1[i1].className.replace(" active", "");
    }
    slides1[slide1Index-1].style.display = "block";  
    dots1[slide1Index-1].className += " active";
    setTimeout(showSlides1, 1000); // Change image every 1 seconds
}
</script><strong><u>NOTICE</u></strong><br/><strong>
1. End semister exams begin from 24 November.<br/>
2. Click <a href="http://nitrkl.ac.in/Academics/AcademicProcess/AcademicCalendar.aspx" target="_blank">here</a> to view academic calender.<br/>
3. End semister timetable released. <br/>
4. Click <a href="https://mail.nitrkl.ac.in/">here</a> to open webmail<br/></strong>
</fieldset>		
</div>


	</div>
	<footer >
	<hr>
	<h3 align="center"><a href="nitrkl.ac.in" style="color:black;">Click here to know more about NIT RKL</a></h3>
	<hr>
		&copy;ANANYA PADHI - ALL RIGHTS RESERVED
	</footer>
	
</body>
</html>