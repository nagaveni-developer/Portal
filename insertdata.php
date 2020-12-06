<?php
session_start();
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
			$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
			if (isset($current_id)) {
				header("Location:insertdata.php");
			}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insertdata</title>
</head>
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
<div class="firbody">
	<h1>Insert books data</h1>
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
<input type="submit" id="sub" value="Submit" name="submit" class="btnSubmit"  />
</form>
</div>

</body>
	</center>
</html>