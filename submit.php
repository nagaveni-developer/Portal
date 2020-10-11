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
            <center>
            <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post" enctype="multipart/form-data">
                <h2 style=" color: #63CFB6;">Choose the Document</h2><br>
                        <div id="button-block"> 
                            <div class="buttons"><input type="button" value="Renewal" id="renewal" class="up-in"><br><br></div>
                            <div class="buttons"><input type="button" value="Lost MEMO" class="up-in"><br><br></div>
                            <!--<div class="buttons"><a href=""><input name="submit" type="button" value="Upload Documents" class="up-in"></a></div>-->      
                <div class="button-block">                            
                    <a id="sug-button" href="#pop" ><div class="buttons"><input type="button" value="Renewal" id="renewal" class="up-in"></div></a>
                    
                        <div id="pop">
                            <a id="sug-close" href="#">X</a>
                            <h2>Steps to be followed</h2>
                            <div class="buttons" ><input type="button" value="Proceed" id="proceed" class="up-in"></div>
                        </div>
                </div>
             </form>
            </center>
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
