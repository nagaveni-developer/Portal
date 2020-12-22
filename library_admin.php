
<?php
function alert($msg) {
  echo "<script type='text/javascript'>alert('$msg');</script>";
  }

    include("connect.php");
    if(! isset($_SESSION['user']))
        header("Location: index.php");
  include('connect.php');
if(isset($_GET["email"])&&isset($_GET["flag"]))
{
require_once 'mailer/class.phpmailer.php';
$mail = new PHPMailer(true);
 

try
 {
          $email=$_GET["email"];
          $mail->IsSMTP();
          $mail->isHTML(true);
          $mail->SMTPDebug  = 0;
          $mail->SMTPAuth   = true;
          $mail->SMTPSecure = "ssl";
          $mail->Host       = "smtp.gmail.com";
          $mail->Port        = '465';
          $mail->AddAddress($email);
$mail->Username="vasaviportal@gmail.com";
$mail->Password   ="VCEportal";
          $mail->SetFrom('vasaviportal@gmail.com','Library Adminstrative Branch');
          $mail->AddReplyTo('vasaviportal@gmail.com','Library Adminstrative Branch');

 $mail->Subject = "Library Adminstrative branch ";
 $mail->Body    = "Hello! Please return the book on or before due date. Have a nice day:)";
       

  if($mail->Send())
        {
            include('connect.php');
            $query ="UPDATE borrower SET flag = 1 WHERE email = '$email'";  
            mysqli_query($conn,$query);
      $msg ="Mail sent";
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
 
<h2 style="text-align:center;color:#087D72;">Library Branch : Student Document Requests</h2>
<a href="exam.php"><button type="button" style="width:auto;">Examination Admin</button></a>
<a href="insertdata.php"><button type="button" style="width:auto;">Insert Books Data</button></a>

<div class="log">
<a href="logout.php"><button type="button">logout</button> </a>
<br>
<a href="library_comp.php"><button type="button">completed</button></a>
</div>


 
<?php

session_start();
include("connect.php");


  $query = "SELECT * FROM borrower where flag=0";
 $result = mysqli_query( $conn, $query); if(mysqli_error($conn))
{
            echo "<script>window.alert('Something Went Wrong. Try Again');</script>";
 }
 
 else if( mysqli_num_rows($result) > 0 )
 {
  
   while( $row = mysqli_fetch_assoc($result) )
        {

                $username = $row['username'];
            //    $file= $row['file'];
                $year= $row['year'];
                $branch=$row['branch'];
                $name = $row['name'];
                $Book_id= $row['Book_id'];
                $email=$row['email'];
                $flag=$row['flag'];
?>
                <div class="card">
          <form id="<?php echo $email; ?>"  action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="get" enctype="multipart/form-data">
<?php        
echo"<br>*********<br>";
         echo "Name : ".$name. "<br>";
        echo "Username : ".$username. "<br>";
        echo "Year : ".$year. "<br>";
        echo "Branch : ".$branch. "<br>";
        echo "Doc required : ".$Book_id. "<br>";
      ?>
      <button id="<?php echo $username.$email?>" 
              type="button" data-mail="<?php echo $email;?>"
              data-flag="<?php echo $flag;?>"
              onClick="checkMail(this.id)">Notify</button>
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
<script>
	function checkMail(buttonID){
		var button=document.getElementById(buttonID);
    var email = button.getAttribute("data-mail");
    var flag = button.getAttribute("data-flag");
    console.log(email);
		window.location.href = 'library_admin.php?email=' + email+'&flag='+flag; 
  }

	</script>
</html>

