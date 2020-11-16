<?php
    session_start();
    include("connect.php");
    if(! isset($_SESSION['user']))
       
?>
<!DOCTYPE html>
<html>
    <head>
        <title> VCE Portal </title>
	     <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
        <link rel="icon" href="images/icon1.png" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <!-- Sripts -->
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <style>
            textarea{
                display: none;
                width: 300px;
                height: 50px;
                background: #333;
                color: #ddd;
                padding: 10px;
                margin: 5px 0 -14px;
            }
            .ans_sub{
                display: none;
                padding: 0 10px;
                height: 30px;
                line-height: 30px;
            }
            .mySlides {display: none}
            img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  width: 800px;
  height:400px;
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
.prev {
  left: 0;
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
.fade{
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  -webkit-animation-fill-mode: forwards; 
  animation-name: fade;
  animation-duration: 1.5s;
  animation-fill-mode: forwards; 
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
}

        </style>
    </head>
    <body id="_3">
        <!-- navigation bar -->
        <a href="index.php">
            <div id="log">
                <div id="i">i</div><div id="cir">.</div><div id="ntro">VCE Portal</div>
            </div>
        </a>
        <ul id="nav-bar">
          
          
  	    <a href="direct.php"><li id="home">Request</li></a>
            
            <a href="profile.php"><li>Hi, <?php echo $_SESSION["user"]; ?></li></a>
            <a href="logout.php"><li>Log out</li></a>
           
        </ul>
        <!-- content -->
        <div id="content">
            
            <center>
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 2</div>
                    <a  href="student.php">
                    <img src="images/examination.jpg" style="width:100%;">
                        
                            <div  class="text" title="Open">Examination Branch</div>
                        
                    </a>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 2</div>
                    <a href="">
                       <img src="images/library.jpg" style="width:100%;">
                            <div class="text" title="Open">Library Mangement</div>
                       
                    </a>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>        
                </div>
                <br>
                <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                </div>
           

         <!-- content -->

        <!-- Footer -->
        <div id="footer">
            &copy; 2020 &bull; VCE Queries.
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



    </body>

</html>
