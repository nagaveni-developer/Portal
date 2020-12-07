<?php
    session_start();
    include("connect.php");
    if(! isset($_SESSION['user'])){
        header("Location: login.php");
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
		</style>
</head>   

<body id="_5">
<!-- navigation bar -->
        
<div id="log"><br>
                <div id="ntro" style="color:white;"><b>VCE Portal</b></div>
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
<br>
<?php
//If GET request for bookID, userreq is true, then show book loan form with pre-filled values
if (isset($_GET['bookID']) && isset($_GET['userreq']) && isset($_GET['bookTitle'])){
	if (isset($_GET['bookID']))
		$bookID=$_GET['bookID'];
	else
        $bookID='';
    
	if (isset($_GET['userreq']))
        $userreq=$_GET['userreq'];
    else
        $userreq='';
    if (isset($_GET['bookTitle']))
        $bookTitle=$_GET['bookTitle'];
    else
        $bookTitle='';
	?>

<!-- Pre-filled Book Search Form based on search-->
	<form class="form-horizontal" action="requestbook.php" method="get">
    <center>
            <label for="userreq">User Name</label>
                <input type="text" id="userreq" name="userreq" placeholder="Enter username"
                  value="<?php echo $userreq?>">
            <label for="bookID">Book ID</label>
                <input type="text" id="bookID" name="bookID" placeholder="Book ID"
                  value="<?php echo $bookID?>">
            <label for="userreq">Book Title</label>
                <input type="text" id="bookTitle" name="bookTitle" placeholder="Enter Book Title"
                  value="<?php echo $bookTitle?>">
            
                <button type="submit" >Request</button>
    </center>
    </form>	

<?php
}
?>
</body>
<!-- Footer -->
<div id="footer">
            &copy; 2020 &bull; VCE Portal.
        </div>

</html>