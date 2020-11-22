
<?php
    session_start();

    if( isset($_SESSION['user'])){
        header("Location: profile.php");
    }

    if( isset( $_POST["submit"] ) )
    {

        function valid($data){
            $data=trim(stripslashes(htmlspecialchars($data)));
            return $data;
        }

        $inuser = valid( $_POST["username"] );
        $inkey = valid( $_POST["password"] );
         if($inuser == "admin" and $inkey == "admin"){
             header("Location: exam.php");
        }
        include("connect.php");

        $query = "SELECT * FROM users WHERE username='$inuser'";
        echo $inuser;
        $result = mysqli_query( $conn, $query);
        if(mysqli_error($conn)){
            echo "<script>window.alert('Something Went Wrong. Try Again');</script>";
        }
        else if( mysqli_num_rows($result) > 0 )
        {
            while( $row = mysqli_fetch_assoc($result) ){
                $user = $row['username'];
                $pass = $row['password'];
                $year= $row['year'];
                $branch=$row['branch'];
                $name = $row['name'];
                $email = $row['email'];
                $date = $row['join_date'];
            }

            if( password_verify( $inkey, $pass ) ){
                $_SESSION['user'] = $user;
                $_SESSION['name'] = $name;
                $_SESSION['year']=$year;
                $_SESSION['branch']=$branch;
                $_SESSION['email'] = $email;
                $_SESSION['date'] = $date;
                header('Location: index.php');
            }
            else{
                echo "<script>window.alert('Wrong Username or Password Combination. Try Again');</script>";
            }
        }
        else{
            echo "<script>window.alert('No Such User exist in database');</script>";
        }
        mysqli_close($conn);
    }
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
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    </head>
    <body id="_5">
        <!-- navigation bar -->
        
            <div id="log"><br>
                <div id="ntro"  style="color:white;"><b>VCE Portal</b></div>
            </div>
    
        <ul id="nav-bar">
        <div class="topnav" id="myTopnav">

            <?php
                if(! isset($_SESSION['user'])){
            ?>
            <a href="index.php"><li  id="home">Log In</li></a>
            <a href="signup.php"><li>Sign Up</li></a>
            <?php
                }
                else{
            ?>
            <a href="profile.php"><li>Hi, <?php echo $_SESSION["user"]; ?></li></a>
            <a href="logout.php"><li>Log Out</li></a>
            <?php
                }
            ?>
        </ul><!--
        <div class="hb">
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
         <i class="fa fa-bars" style="font-size:50px;"></i></a>
        </div>
        </div>
        <script>
		function myFunction() {
  		var x = document.getElementById("myTopnav");
  		if (x.className === "topnav") {
    		x.className += " responsive";
  		} else {
    			x.className = "topnav";
  		}
		}
        </script>-->
        <!-- content -->
        <div id="content">
            <center>
                <div class="heading">
                    <div id="ntro"  style="color:black;"><b>VCE Portal</b></div></h1><br><br>
                    <p id="tag-line" style="color:black;">  Students <=> Examination Branch</p>
                </div>
                <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post" enctype="multipart/form-data">
                    <input name="username" id="user" type="text" title="Username" placeholder="Username" style="color:black;" required>
                    <input name="password" id="key" type="password" title="Password" placeholder="Password" style="color:black;" required>
                    <i class="material-icons" id="lock">lock</i>
                    <i class="material-icons" id="person">person</i>
                    <div id="button-block">
                        <center>
                            <div class="buttons"><input name="submit" type="submit" value="Log In" class="up-in"></div>
                            <div class="buttons" id="new"><input type="button" value="Create a new account" class="up-in" id="tosign"></div>
                        </center>
                    </div><br>
                    <a href="contacts.php" id="trouble" style="color:black;"><span>Having Trouble in login ? Contact Us</span></a>
                </form>
            </center>
        </div>


        <!-- Footer -->
        <div id="footer">
            &copy; 2020 &bull; VCE Portal.
        </div>
        

        <!-- Sripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script type="text/javascript" src="js/jquery-3.2.1.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/script.js"></script>

    </body>

</html>
