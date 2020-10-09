
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
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
        <link rel="icon" href="images/icon1.png" >
    </head>
    <body id="_5">
        <!-- navigation bar -->
        
            <div id="log">
                <div id="i">i</div><div id="cir">.</div><div id="ntro">VCE Portal</div>
            </div>
    
        <ul id="nav-bar">
            <?php
                if(! isset($_SESSION['user'])){
            ?>
            <a href="login.php"><li  id="home">Log In</li></a>
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
        </ul>

        <!-- content -->
        <div id="content">
            <center>
               
                <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post" enctype="multipart/form-data">
                            <h2 style=" color: #63CFB6;">Choose the Document</h2><br>
                 
                        <div id="button-block">   
                            <div class="buttons"><input type="button" value="Allotment Order" id="renewal" class="up-in"><br><br></div>
                            <div class="buttons"><input type="button" value="Bonofied" class="up-in"><br><br></div>
                            <!--<div class="buttons"><a href=""><input name="submit" type="button" value="Upload Documents" class="up-in"></a></div>
                    -->
                        </div>
                </form>
            </center>
        </div>


        <!-- Footer -->
        <div id="footer">
            &copy; 2020 &bull; VCE Queries.
        </div>

        <!-- Sripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script type="text/javascript" src="js/jquery-3.2.1.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/script.js"></script>

    </body>

</html>
