@@ -1,48 +0,0 @@

<?php
if(isset($_POST["submit"]))
{
echo "keerthi";
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