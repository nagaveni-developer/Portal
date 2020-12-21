<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 950px;
  margin : auto;
 
  text-align: center;
  font-family: arial;
}
.log{
   width: 200px;
   float : right;
}
.title {
  color: grey;
  font-size: 18px;
}

button {
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
input{

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
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>    
 
<h2 style="text-align:center;color:#087D72;">Student Document Requests</h2>
<div class="log">
<a href="logout.php"><button type="button">logout</button> </a>
<br>
<a href="exam.php"><button type="button">Pending</button></a>
</div>


 
<?php

session_start();
include("connect.php");


  $query = "SELECT * FROM data where flag=1";
 $result = mysqli_query( $conn, $query); if(mysqli_error($conn))
{
            echo "<script>window.alert('Something Went Wrong. Try Again');</script>";
 }
 
 else if( mysqli_num_rows($result) > 0 )
 {
  
   while( $row = mysqli_fetch_assoc($result) )
        {

                $roll = $row['rollno'];
            //    $file= $row['file'];
                $year= $row['year'];
                $branch=$row['branch'];
                $name = $row['name'];
                $doc= $row['doc_req'];
                $date = $row['date'];
$mail=$row['mail'];
$flag=$row['flag'];
?>
                <div class="card">
          <form id="<?php echo $mail; ?>"  action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="get" enctype="multipart/form-data">
<?php        
echo"<br>*********<br>";
         echo "Name : ".$name. "<br>";
        echo "Roll number : ".$roll. "<br>";
        echo "Year : ".$year. "<br>";
        echo "Branch : ".$branch. "<br>";
        echo "Doc required : ".$doc. "<br>";
       echo "Date : ".$date. "<br>";
      ?>
      <?php
       echo"<br>*********<br>";
          }          
  }
       
else
{
            echo "<script>window.alert('No Such User exist in database');</script>";
}
       
?>
 
 </form>
</div>
</body>
</html>

