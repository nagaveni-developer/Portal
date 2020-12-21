
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
	<form class="form-horizontal" action="lib_student_mail.php" method="get">
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
            
                <button id="<?php echo $bookID?>" 
                        data-bookID="<?php echo $bookID;?>"
                        onClick="checkBook(this.id)">submit</button>
    </center>
    </form>	

<?php
}
?>
</body>
<script>
	function checkBook(buttonID){
		var button=document.getElementById(buttonID);
        var bookID = button.getAttribute("data-bookID");
        

    console.log(mail);
		window.location.href = 'lib_student_mail.php?Book_id=' + bookID; 
  }

	</script>
<!-- Footer -->
<div id="footer">
            &copy; 2020 &bull; VCE Portal.
        </div>

</html>