@@ -1,48 +0,0 @@
<!DOCTYPE html>
<head>
</head>
<body>
<?php
function alert($msg) {
  echo "<script type='text/javascript'>alert('$msg');</script>";
  }
if(isset($_GET["email"]))
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
          $mail->SetFrom('vasaviportal@gmail.com','Examination Branch');
          $mail->AddReplyTo('vasaviportal@gmail.com','Examination Branch');
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
</body>
</html>