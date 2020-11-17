<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png","pdf");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a PDF, JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excatly 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"uploads/".$file_name); //The folder where you would like your file to be saved
         echo "Success";
      }else{
         print_r($errors);
      }
   }

// PHPMailer script below



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
$mail->addAttachment("uploads/".$file_name);   $mail->SetFrom('vcequeries82@gmail.com','VCE Adminstrative branch');
                                     $mail->AddReplyTo('vcequeries82@gmail.com','VCE Adminstrative branch');

 $mail->Subject = "VCE Adminstrative branch ";
 $mail->Body    = "HI admin there is a request from a student,  please go through the below form ";
       

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

            
$query="insert into data(name,rollno,branch,year,file)values('$name','$user','$branch',$year,'$file_name')";
     
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