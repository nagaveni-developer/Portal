<!DOCTYPE html>
<html>
    <head>
        <title> VCE Portal </title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
        <link rel="icon" href="images/icon1.png" >
    </head>
    <body id="_6">
        <!-- navigation bar -->
        <a href="index.php">
            <div id="log">
                <div id="ntro"  style="color:black;"><b>VCE Portal</b></div>
            </div>
        </a>
        <ul id="nav-bar">
           
            <?php
                if(! isset($_SESSION['user'])){
            ?>
            <a href="index.php"><li>Log In</li></a>
            <a href="signup.php"><li id="home">Sign Up</li></a>
            <?php
                }
                else{
            ?>
            <a href="profile.php"><li>Hi, <?php echo $_SESSION["user"]; ?></li></a>
            <a href="logout.php"><li>Log Out</li></a>
            <?php
                }
            ?>
        </ul>

        <!-- content -->
        <div id="content">
            <div id="sf">
                <center>
                    <div class="heading"><br>
                        <div id="ntro"  style="color:white;"><b>VCE Portal</b></div></h1><br><br>
                        <p id="tag-line">Student<=>Examination Branch</p>
                    </div>

                    <form  action="otp_verify.php" method="post"><br><br>
                        <input name="otp" id="otp" type="text" title="OTP sent to your registered mail" placeholder="Enter OTP" required>
                           <div id="otp">
                               <center>
                                   <div class="buttons" id="new"><input name="submit" type="submit" value="CREATE ACCOUNT" class="up-in" ></div>
                              </center>
                           </div>
                    </form>

  </body>
</html>


<?php
session_start();
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
include('connect.php');
require_once 'mailer/class.phpmailer.php';
 $mail = new PHPMailer(true);
    if( isset( $_POST["submit"] ) )
    {
    //  echo "string";

        function valid($data){
            $data=trim(stripslashes(htmlspecialchars($data)));
            return $data;
        }

        $username = valid( $_POST["username"] );
        $password = valid( $_POST["password"] );
        $password = password_hash($password, PASSWORD_DEFAULT);
        $name = valid( $_POST["name"] );
        $email = valid( $_POST["email"] );
        $year=valid($_POST["year"]);
        $branch=valid($_POST["branch"]);
        $myfile = fopen("auth.txt", "w") or die("Unable to open file!");
        $rand = rand(99999,999999);
        fwrite($myfile,$rand);
        fwrite($myfile,"\n");
        fwrite($myfile, $username);
        fwrite($myfile,"\n");
        fwrite($myfile,$password);
        fwrite($myfile,"\n");
        fwrite($myfile,$year);
        fwrite($myfile,"\n");
        fwrite($myfile,$branch);
        fwrite($myfile,"\n");
        fwrite($myfile,$name);
        fwrite($myfile,"\n");
        fwrite($myfile,$email);
        fwrite($myfile,"\n");
        fclose($myfile);

        try
           {
            $mail->IsSMTP();
            $mail->isHTML(true);
            $mail->SMTPDebug  = 0;
            $mail->SMTPAuth   = true;
            $mail->SMTPSecure = "ssl";
            $mail->Host       = "smtp.gmail.com";
            $mail->Port        = '465';
            $mail->AddAddress($email);
            $mail->Username   ="vasaviportal@gmail.com";
            $mail->Password   ="VCEportal";
            $mail->SetFrom('vasaviportal@gmail.com','VCE Portal');
            $mail->AddReplyTo('vasaviportal@gmail.com','VCE Portal');
            $mail->Subject    = "VCE Portal Account verification";
            $mail->Body    = $username." your OTP is : ".$rand;
            //$mail->AltBody    = $txt;

            if($mail->Send())
            {

             $msg = "Hi ".$username." please verify your mail  : ".$email." ";
             echo $msg;
             #echo "<script>alert(mail sent)</script>";
             alert($msg);
             #header("Location:index.php");
             //header( "Refresh:3; url=index.php", true, 303)

            }
            else {
              echo "Mail not sent";
              alert("mail not sent");
              // code...
            }
           }
           catch(phpmailerException $ex)
           {
            $msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";
            alert($msg);
           }

    }


?>
