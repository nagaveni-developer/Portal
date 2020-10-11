<?php
    session_start();
    include("connect.php");
    if(! isset($_SESSION['user']))
        header("Location: login.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title> VCE Portal </title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link rel="icon" href="images/icon1.png" >
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
    </head>
    <style>
        #popup1
{
  position:relative;
  top:5vh;
  width:40vw;
  background-color:#0e3b68;
  -khtml-opacity:0;
  -moz-opacity : 0;
  -ms-filter: "alpha(opacity=0)";
  filter: progid:DXImageTransform.Microsoft.Alpha(opacity=0);
  filter : alpha(opacity=0);
  opacity : 0;
  padding:15px;
  border-style:solid;
  border-radius:5px;
  border-color:#007179;
  transition:all 1s;
  -webkit-transition:all 1s;
}
#popup2
{
  position:relative;
  top:5vh;
  width:40vw;
  background-color:#0e3b68;
  -khtml-opacity:0;
  -moz-opacity : 0;
  -ms-filter: "alpha(opacity=0)";
  filter: progid:DXImageTransform.Microsoft.Alpha(opacity=0);
  filter : alpha(opacity=0);
  opacity : 0;
  padding:15px;
  border-style:solid;
  border-radius:5px;
  border-color:#007179;
  transition:all 1s;
  -webkit-transition:all 1s;
}

#sug-close
{
  position:absolute;
  left:100%;
  top:-20px;
  margin-left:-10px;
  background-color:#EFF1F3;
  font-size:12px;
  padding:5px 7px;
  border-radius:50px;
  border-style:solid;
  border-color:#0c90b1;;
  font-weight:bold;
  color:#0c90b1;
  text-decoration:none;
  font-family:arial;
}

#sug-close:hover
{
  background-color:#EFF1F3;
  border-color:#097b97;
 
}

#sug-close:active
{
  background-color:#A9F5F2;
  color:black;
}

#popup1:target
{
  -khtml-opacity:1;
  -moz-opacity : 1;
  -ms-filter: "alpha(opacity=100)";
  filter: progid:DXImageTransform.Microsoft.Alpha(opacity=100);
  filter : alpha(opacity=100);
  opacity : 1;
}
#popup2:target
{
  -khtml-opacity:1;
  -moz-opacity : 1;
  -ms-filter: "alpha(opacity=100)";
  filter: progid:DXImageTransform.Microsoft.Alpha(opacity=100);
  filter : alpha(opacity=100);
  opacity : 1;
}
.colpop-right {
    float: right;
    padding: 10px;
    height: 300px; 
    width: 55%;
  }
  .colpop-left {
    float: left;
    padding: 10px;
    height: 300px; 
    width: 25%;
  }
  
  
</style>
    <body id="_5">
        <!-- navigation bar -->
        <a href="index.php">
            <div id="log">
                <div id="i">i</div><div id="cir">.</div><div id="ntro">VCE Portal</div>
            </div>
        </a>
        <ul id="nav-bar">
            <a href="direct.php"><li id="home">Request</li></a>
            <a href="profile.php"><li>Hi, <?php echo $_SESSION["user"]; ?></li></a>
            <a href="logout.php"><li>Log Out</li></a>
        </ul>
        <!-- content -->
        <div id="content">
           
            <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post" enctype="multipart/form-data">
                <h2 style=" color: #63CFB6;">Choose the Document</h2><br>
                    
                            <!--<div class="buttons"><a href=""><input name="submit" type="button" value="Upload Documents" class="up-in"></a></div>-->      
               
                <div class="button-block">                            
                    <a  href="#popup1" ><div class="buttons"><input type="button" value="Renewal" id="renewal" class="up-in"></div></a>
                </div>
               
                        <div id="popup1">
                            <a id="sug-close" href="#popup1">X</a>
                            <h2>Steps for Renewal</h2>
                            <div class="buttons" ><input type="button" value="Proceed" id="proceed" class="up-in"></div>
                        </div><br><br>
              
               
                <div class="button-block">                            
                    <a id="sug-button" href="#popup2" ><div class="buttons"><input type="button" value="Lost Memo" id="lostmemo" class="up-in"></div></a><br><br>
                </div>
               
                        <div id="popup2">
                            <a id="sug-close" href="#popup2">X</a>
                            <h2>Steps for lost memo</h2>
                            <div class="buttons" ><input type="button" value="Proceegweraed" id="proceed" class="up-in"></div>
                        </div>
              
             </form>
         
        </div>

 <!-- Footer -->
        <div id="footer">
            &copy; 2020 &bull;VCE Queries.
        </div>
        <!-- Sripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script type="text/javascript" src="js/jquery-3.2.1.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/script.js"></script>

    </body>

</html>
