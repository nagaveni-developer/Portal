<?php
    session_start();
	include("connect.php");
	if(! isset($_SESSION['user']))
	header("Location: index.php");
$query="select * from book";
$res=mysqli_query($conn,$query);
if(isset($_POST['sub']))
{
	$id=$_POST['search'];
	if ($id=="all") {
	$query="select * from book";	

	}
	else
	{
	$query="select * from book where Book_id='$id'";
	}
	$res=mysqli_query($conn,$query);
}

?>
<!DOCTYPE html>
<html>
<head>
		<title> VCE Portal </title>	
		<link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
	
		<style>	
		a{
		     text-decoration: none;
			}
		li{
			display:inline-block;
        padding:17px;
		}
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
            <a href="direct.php"><li id="home">Request</li></a>
            <a href="profile.php"><li>Hi, <?php echo $_SESSION["user"]; ?></li></a>
            <a href="logout.php"><li>Log Out</li></a>
            <?php
                }
            ?>
        </ul>

<center>
<div class="head">
<form action="searchbook.php" method="post">
<input type="text" name="search" placeholder="Enter C no " id="search">
<button name="sub" id="sub">submit</button><br><br>
</form>
<table >
<tr>
	<th>Book ID</th>
	<th>Title</th>
	<th>author</th>	
</tr>
<?php 
while ($row=mysqli_fetch_assoc($res)) {
	
	?>
	<tr>
		<td><?php echo $row['Book_id']?></td>
		<td><?php echo $row['Title']?></td>
		<td><?php echo $row['Author_name']?></td>
	</tr>
<?php
}
 ?>
</table>
</center>
</body>
</html>