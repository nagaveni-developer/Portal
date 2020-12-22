
<?php
function alert($msg) {
  echo "<script type='text/javascript'>alert('$msg');</script>";
  }
if(isset($_GET["doc_req"]))
{
$doc_req = $_GET["doc_req"];
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
                                     $mail->SetFrom('vasaviportal@gmail.com','Examination Branch');
                                     $mail->AddReplyTo('vasaviportal@gmail.com','Examination Branch');

 $mail->Subject = "VCE Adminstrative branch ";
 $mail->Body    = "Hello Admin! There is a request from a student,  please visit the website to check the student application form ";
       

  if($mail->Send())
        {
      $msg =" Mail sent...... ";
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
session_start();
include("connect.php");

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
                $date = $row['join_date'];
            }

            $doc_req = $_GET["doc_req"];
            echo $doc_req;
$query="insert into data(name,rollno,branch,year,mail,doc_req)values('$name','$user','$branch',$year,'$email','$doc_req')";
     
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
?>