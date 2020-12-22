<?php
    session_start();
	include("connect.php");
	if(! isset($_SESSION['user'])){
        header("Location: index.php");
    }
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
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
        <link rel="icon" href="images/icon1.png" >
        
		<style>	
        body{
	    width: 100%;
        height: 670px;;
        background-size: cover;
        background-repeat:repeat;
        }
		a{
		     text-decoration: none;
			}
		li{
			display:inline-block;
        padding:17px;
		}
		#books_table {
        border-collapse: collapse;
        width: 70%;
        }

#books_table td, #books_table th {
  border: 1px solid #ddd;
  padding: 8px;
}

#books_table tr:nth-child(even){background-color: #f2f2f2;}
#books_table tr:nth-child(odd){background-color: rgb(255,255,255,0.5);}

#books_table tr:hover {background-color: #ddd;}

#books_table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: rgb(0,0,0,0.5);
  color: white;
}
.subbtn{
    border: 2px solid white;
  outline: 0;
  display : inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100px;
  font-size: 18px;
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
<form action="searchbook.php" method="post">
<input type="text" name="search" placeholder="Enter C no " id="search">
<div id="button-block">
<div class="buttons"><button name="sub" class="subbtn" id="sub">submit</button></div><br><br><br>
</div>
</form>
	
<table id="books_table">
<tr>
	<th>Book_id</th>
	<th>Title</th>
	<th>Author</th>
	<th>No of Copies</th>
    <th>Request</th>
</tr>
<?php 
while ($row=mysqli_fetch_assoc($res)) {
	?>
	<tr>
		<td><?php echo $row['Book_id']?></td>
		<td><?php echo $row['Title']?></td>
		<td><?php echo $row['Author_name']?></td>
        <td><?php echo $row['No_of_copies']?></td>
        <td>
        <button type="button" id="<?php echo $row['Book_id'];?>" 
                data-user="<?php echo $_SESSION['user'];?>" 
                data-bookID="<?php echo $row['Book_id'];?>"
                data-bookTitle="<?php echo $row['Title'];?> "
                style="background:#090;" onClick="request(this.id)">Request</button>
        </td>
	</tr>
<?php
}
 ?>
</table>
</center>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
	function request(buttonID){
		var button=document.getElementById(buttonID);
        var userreq = button.getAttribute("data-user");
		var bookID = button.getAttribute("data-bookID");
		var bookTitle = button.getAttribute("data-bookTitle");
		
		window.location.href = 'requestbook.php?bookID=' + bookID + '&userreq=' + userreq + '&bookTitle=' + bookTitle; 
	}
	</script>

    
</body>
</html>