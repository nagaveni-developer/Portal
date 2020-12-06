<?php
    session_start();
	include("connect.php");
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
	// $row=mysqli_fetch_assoc($res);
}
?>
<!DOCTYPE html>
<html>
<head>
        
		<style>	
		a{
		     text-decoration: none;
			}
		li{
			display:inline-block;
        padding:17px;
		}
		</style>
<body>
	<center>
<form action="searchbook.php" method="post">
<input type="text" name="search" placeholder="Enter C no " id="search">
<button name="sub" id="sub">submit</button><br><br><br>
</form>
</head>
	
<body>
<table >
<tr>
	<th>Book_id</th>
	<th>Title</th>
	<th>Author</th>
	
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