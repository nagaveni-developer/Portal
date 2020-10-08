
<!DOCTYPE html>
<html>
    <head>
        <title> VCE Queries </title>
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
            .pop{
                display: none;
                text-align: center;
                margin: 195.5px auto;
                font-size: 12px;
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
          
            <?php
                if(! isset($_SESSION['user'])){
            ?>
            <a href="index.php"><li>Log In</li></a>
            <a href="signup.php"><li id="home">Sign Up</li></a>
            <?php
                }
                else{
            ?>
            <a href="profile.php"><li>Hi, <?php echo $_SESSION["user"]; ?></li></a>
            <a href="logout.php"><li>Log Out</li></a>
            <?php
                }
            ?>
        </ul>
        <!-- content -->
        <div id="content">
            <h4>
                <a id="title-head" href="categories.php">Categories</a>
            </h4>
            <div id="box0">
                <center>
                    <a id="ada" href="#box1">
                        <div id="algo" class="img">
                            <div id="p" title="Open">Examination Branch</div>
                        </div>
                    </a>
        
	             <a id="db" href="#box2">
                        <div id="database" class="img">
                            <div id="p" title="Open">Library Mangement</div>
                        </div>
                    </a>
		    </center>
            </div>

         <!-- content -->

        <!-- Footer -->
        <div id="footer">
            &copy; 2020 &bull; VCE Queries.
        </div>


    </body>

</html>