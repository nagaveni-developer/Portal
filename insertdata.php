  <?php
    session_start();
    include("connect.php");
    if(! isset($_SESSION['user']))
        header("Location: index.php");
?>

<?php
 include("connect.php");
if(isset($_POST['submit']))
{
	$book_id=$_POST['reg'];
	$title=$_POST['con'];
    $author=$_POST['inc'];
    $copies=$_POST['cop'];
    $sql = "INSERT INTO book (Book_id,Title,Author_name,No_of_copies)
		VALUES('$book_id','$title','$author',$copies)";
		 
	if (mysqli_query($conn,$sql))
	{
	header("Location:insertdata.php");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insertdata</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<style>	
		a{
		     text-decoration: none;
			}
		li{
			display:inline-block;
        padding:17px;
		}
		.btnSubmit{
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
<body>
	<center>
<div class="firbody">
	<h1 style="text-align:center;color:#087D72;">Insert books data</h1>
	<button class="btnSubmit" onclick="history.back()">Back</button><br><br>

	<table width="450px;">
<form name="frmImage" enctype="multipart/form-data" action=""
        method="post">
		<tr>
		<td><label id="same" for="reg">Book ID</label></td>
		<td> <input type="text" id="reg" name="reg"> </td>
		</tr>
		<tr>
		<td><label id="same" for="con">Title</label></td>
		<td> <input type="text" id="reg" name="con"> </td>
		</tr>
		<tr>
		<td><label id="same" for="place">Author Name</label></td>
		<td> <input type="text" id="reg" name="inc"> </td>
		</tr>
        <tr>
		<td><label id="same" for="place">Number of copies</label></td>
		<td> <input type="number" id="reg" name="cop"> </td>
		</tr>
	</table>
<br>
<br>
<div class="buttons"><input type="submit" id="sub" value="Submit" name="submit" class="btnSubmit"  /></div>
</form>
</div>

</body>
	</center>
</html>