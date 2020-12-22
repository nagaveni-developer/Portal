<?php
function alert($msg) {
  echo "<script type='text/javascript'>alert('$msg');</script>";
  }
  session_start();
  include("connect.php");
if(isset($_GET["bookID"]))
{
 $Book_id = $_GET["bookID"];
require_once 'mailer/class.phpmailer.php';
$mail = new PHPMailer(true);
  

try
 {
          $email="keerthipriya1438@gmail.com";
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
          $mail->SetFrom('vasaviportal@gmail.com','Library Adminstrative branch');
          $mail->AddReplyTo('vasaviportal@gmail.com','Library Adminstrative branch');

 $mail->Subject = "Library Adminstrative branch ";
 $mail->Body    = "Hello Admin! There is a BOOK request from a student,  please visit the website to view the student request ";
       
 echo $Book_id;
  if($mail->Send())
        {
      $msg =" Mail sent...... ";
      echo $msg; 
      include('connect.php');
    if( isset($_SESSION['user']))
{
     $user=$_SESSION['user'];
echo"\ninside session block \n user=".$user;

  $query = "SELECT * FROM users WHERE username='$user'";
 $result = mysqli_query( $conn, $query);
        if(mysqli_error($conn)){
            echo "<script>window.alert('Something Went Wrong. Try Again');</script>";
        }
        else if( mysqli_num_rows($result) > 0 )
        {
            while( $row = mysqli_fetch_assoc($result) ){

                $user = $row['username'];
                echo "\nusername : ".$user; 
                
                $pass = $row['password'];
                $year= $row['year'];
                $branch=$row['branch'];
                $name = $row['name'];
                $email = $row['email'];
               
            }

            
$query="insert into borrower(name,username,branch,year,email,Book_id)values('$name','$user','$branch',$year,'$email',$Book_id)";
     
 if(mysqli_query( $conn, $query))
{
echo "data inserted";
}
        else {
echo mysqli_error($conn); 
}



  }
        else{
            echo "<script>window.alert('No Such User exist in database');</script>";
        }
        mysqli_close($conn);
    }
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