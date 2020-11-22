
<?php
function alert($msg) {
  echo "<script type='text/javascript'>alert('$msg');</script>";
  }
if(isset($_POST["submit"]))
{
require_once 'mailer/class.phpmailer.php';
$format="SELECT * FROM data WHERE mail like '%".$_POST["mail"]."%'";
$r = $conn->query($format);
$mail = new PHPMailer(true);
$row = mysqli_fetch_assoc($r);
 

try
 {
         
        $email=$row["mail"];
          $mail->IsSMTP();
          $mail->isHTML(true);
          $mail->SMTPDebug  = 0;
          $mail->SMTPAuth   = true;
          $mail->SMTPSecure = "ssl";
          $mail->Host       = "smtp.gmail.com";
          $mail->Port        = '465';
          $mail->AddAddress($email);
$mail->Username="vcequeries82@gmail.com";
$mail->Password   ="VceQueries@123";
                                     $mail->SetFrom('vcequeries82@gmail.com','VCE Adminstrative branch');
                                     $mail->AddReplyTo('vcequeries82@gmail.com','VCE Adminstrative branch');

 $mail->Subject = "VCE Adminstrative branch ";
 $mail->Body    = "Hello! Your doucument has been approved,  please visit the website to check the status of ur application form ";
       

  if($mail->Send())
        {
      $msg ="Mail sent...... ";
      echo $msg;
       }
                                   
      else {
       echo "Mail not sent";
              }                  
 }  
                                    catch(phpmailerException $ex)
    {
  $msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";
    alert($msg);
   }

}

?>
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
<a href="exam_comp.php"><button type="button">completed</button></a>
</div>


 
<?php

session_start();
include("connect.php");


  $query = "SELECT * FROM data where flag=0";
 $result = mysqli_query( $conn, $query); if(mysqli_error($conn))
{
            echo "<script>window.alert('Something Went Wrong. Try Again');</script>";
 }
 
 else if( mysqli_num_rows($result) > 0 )
 {
   $n=1;
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
?>
                <div class="card">
          <form id="f<?php echo $n; ?>"  action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post" enctype="multipart/form-data">
<?php        
echo"<br>*********<br>";
         echo "Name : ".$name. "<br>";
        echo "Roll number : ".$roll. "<br>";
        echo "Year : ".$year. "<br>";
        echo "Branch : ".$branch. "<br>";
        echo "Doc required : ".$doc. "<br>";
       echo "Date : ".$date. "<br>";
      ?>
      <input type="submit" value="submit" name="submit" id="ar<?php echo $n;?>"> </form>
      <?php
       echo"<br>*********<br>";
       $n++;
          }          
  }
       
else
{
            echo "<script>window.alert('No Such User exist in database');</script>";
}
       
?>
 
 
</div>
</body>
</html>

