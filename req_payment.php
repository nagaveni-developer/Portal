<!DOCTYPE html>
<html>
<head>
		<title> VCE Portal </title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
        <link rel="icon" href="images/icon1.png" >
        
		<style>	
        *{
  margin:0;
  padding:0;
}
body{
  height:150vh;
  overflow:hidden;
  background:linear-gradient(-40deg,white,lightgrey);
  box-sizing:border-box;
  font-family: "Montserrat", sans-serif;
}
#wrapper{
 height:660px;
  width:700px;
  background:#fff;
  border:1px solid grey;
  border-radius:10px;
  margin:3em auto 0 auto;
  overflow:hidden;
  box-shadow:0px 2px 25px #000;
}
.row{
  display:flex;
  justify-content:center;
}
.row:nth-of-type(1) .col-xs-5{
  display:flex;
  flex-direction:column;
  align-items:center;
  background:#e6e6e6;
/*   border:solid 1px transparent; */
  border-radius:4px;
  margin:1em 5px;
}
.row:nth-of-type(1) .col-xs-5 #cards{
  display:flex;
  flex-direction:row;
  flex-wrap:nowrap;
  justify-content:center;
}
.row:nth-of-type(1) .col-xs-5 #cards img{
  width:100px;
  height:100px;
}

.row:nth-of-type(2) .col-xs-5{
  display:flex;
  flex-direction:column;
  justify-content:space-around;
  flex-basis:45%;
}
.row:nth-of-type(2) .col-xs-5 input{
  border:2px solid lightgrey;
  height:35px;
  border-radius:10px;
  padding-left:10px;
}
.row .col-xs-5 input:focus, .row:nth-of-type(3) .col-xs-2 input:focus{
  border-color:green;
  outline:0;
}
label{
  position:relative;
}
 .fa{
  position:absolute;
  right:25px;
  bottom:10px;
}
.row-three{
  display:flex;
  justify-content:space-around;
  align-items:baseline;
  align-content:space-between;
  margin:2em 1em 2.4em 1em;
}
.row:nth-of-type(3) .col-xs-2{
  flex-basis:50%;
}
.row:nth-of-type(3) .col-xs-5{
  flex-basis:40%;
  align-items:baseline;
}
.row:nth-of-type(3) .col-xs-2 input{
  height:35px;
  border:2px solid lightgrey;
  border-radius:10px;
  padding-left:10px;
}
.row:nth-of-type(3) .col-xs-5 .small{
  font-size:.70em;
}
footer{
  height:80px;;
  background:#e6e6e6;
  display:flex;
  flex-direction:row;
  justify-content:space-between;
  align-items:center;
}
footer .btn{
  margin:1px 1px 1px 1px;
  border-radius:20px;
  
}
.btn{
  margin:50px 15px 55px 15px;
  border-radius:20px;
  padding:.65em 1.6em;
}
footer :nth-child(1){
  background-color:#fff;
 
}
footer :nth-child(2){
  
  color:#fff;
}
.col-xs-5.highlight{
  border:solid 1px blue;
}
input[type="text"], input[type="password"], input[type="email"] {
    display: block;
    padding: 10px 48px 10px 10px;
    box-sizing: border-box;
    font-size: 16px;
     width: 250px;
    margin: 25px 0px 45px;
}
        
		</style>
</head>
<body>
<div id="wrapper">
  <div class="row">
    <div class="col-xs-5">
      <div id="cards">
        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Visa-icon.png">
      </div><!--#cards end-->
      <div class="form-check">
</div>
    </div><!--col-xs-5 end-->
    <div class="col-xs-5">
      <div id="cards">
      <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Master-Card-icon.png">
      </div><!--#cards end-->
      <div class="form-check">
  
</div>
    </div><!--col-xs-5 end-->
  </div><!--row end-->
  <div class="row">
    <div class="col-xs-5">
      <i class="fa fa fa-user"></i>
      <label for="cardholder" required>Cardholder's Name</label>
      <input type="text" id="cardholder">
    </div><!--col-xs-5--><br>
    <div class="col-xs-5">
      <i class="fa fa-credit-card-alt"></i>
      <label for="cardnumber">Card Number</label>
      <input type="text" id="cardnumber">
    </div><!--col-xs-5-->
  </div><!--row end-->
  <div class="row row-three">
    <div class="col-xs-2">
      <i class="fa fa-calendar"></i>
      <label for="date">Valid thru</label>
      <input type="text" placeholder="MM/YY" id="date">
    </div><!--col-xs-3-->
    <div class="col-xs-2">
      <i class="fa fa-lock"></i>
      <label for="date">CVV / CVC *</label>
      <input type="text">
    </div><!--col-xs-3-->
    <div class="col-xs-5">
      <span class="small">* CVV or CVC is the card security code, unique three digits number on the back of your card seperate from its number.</span>
    </div><!--col-xs-6 end-->
  </div><!--row end-->
  <div class="row">
 <div id="myDIV" style="color:green;"></div>
<button  onclick="myFunction()" class="btn" style="margin-top:0px;margin-left-55px;">Pay</buton>
  
  </div>
  <footer>
    <button class="btn" style="width:124px; background-color :none;
            margin-right :100px;
            margin-left :40px;
            height :40px;" onclick="history.back()">Back</button>
    <form action="student_mail.php" method="get">
    <button type="button" id="<?php echo $_GET['doc_req'];?>" 
            data-doc_req="<?php echo $_GET['doc_req'];?>"
            onClick="request(this.id)" 
            style="width:124px; background-color :none;
            margin-right :100px;
            margin-left :40px;
            height :40px;">
            send request</button>
    </form>
    
  </footer>
</div><!--wrapper end-->
</body>
<script>
	function request(buttonID){
		var button=document.getElementById(buttonID);
        var doc_req = button.getAttribute("data-doc_req");
		window.location.href = 'student_mail.php?doc_req=' + doc_req; 
	}
	</script>
  <script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.innerHTML === "") {
    x.innerHTML = "Your Payment is successful";
  } else {
    x.innerHTML = "";
  }
}
</script>
</html>
