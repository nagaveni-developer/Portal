<?php
    session_start();
    include("connect.php");
    if(! isset($_SESSION['user']))
        header("Location: index.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title> VCE Portal </title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link rel="icon" href="images/icon1.png" >
        <style>
        body{
        background-repeat:repeat;
        }
        </style>
    </head>
    <body id="_5">
        <!-- navigation bar -->
        <a href="index.php">
            <div id="log"><br>
                <div id="ntro" style="color:white;"><b>VCE Portal</b></div>
            </div>
        </a>
        <ul id="nav-bar">
           <?php
                if(! isset($_SESSION['user'])){
            ?>
              	    <a href="direct.php"><li id="home">Request</li></a>

            <a href="login.php"><li  id="home">Log In</li></a>
            <a href="signup.php"><li>Sign Up</li></a>
            <?php
                }
                else{
            ?>
            <a href="direct.php"><li id="home">Request</li></a>
            <a href="profile.php"><li>Hi, <?php echo $_SESSION["user"]; ?></li></a>
            <a href="logout.php"><li>Log Out</li></a>
            <?php
                }
            ?>
        </ul>
        <!-- content -->
        <div id="content">
           
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <center>
                <h2 style="color:black;">Select the Document </h2><br>
                    
               <div class="modal-block">
                <div class="button-block">                            
                    <div class="buttons"><input href="#pop1" class="modal-button" type="button" value="Renewal" id="renewal" ></div>
                </div>
               <br>
                <div class="button-block">                            
                    <div class="buttons"><input href="#pop2" class="modal-button" type="button" value="Lost Memo" id="lostmemo" class="up-in"></div><br><br>
                </div>

                </div>
                </center>
               <div class="bg-modal" id="pop1">
                   <div class="modal-content">
                   <div class="close">x</div>
                   <center>
                   <br>
                   <h2 style=" color: black;">Renewal</h2><br>
                   <br>
                   </center>
                   <p style="color:black;">
                   1. Apply for Tution Fee Reimbursement online.<br>
                   2. Upload Prevous year MEMO, Income Affidavit,College bonofied.<br>
                   3. Submit the soft copy of attachments.
                   <br><br>
                   <input type="file" name="image1" id="file">
                   <input type="submit" value="Upload File" name="submit"><br><br>
                   </p>
                   
                   </div>
               </div>
               <div class="bg-modal" id="pop2">
                   <div class="modal-content">
                   <div class="close">x</div>
                   <center>
                   <br>
                   <h2 style=" color: black;">Lost MEMO</h2><br>
                   <br>
                   </center>
                   <p style="color:black;">
                   <br>
                   
                   1. Submit the previous Semester MEMO copy.<br><br>
                   <input type="file" name="image2" id="file">
                   <input type="submit" value="Upload File" name="submit"><br><br>
                   <br><br>
                   </p>
                   <center>
                   <div class="buttons" ><input type="button" value="Proceed" id="proceed" class="up-in"></div>
                  </center>
                   </div>
               </div>

             </form>
         
        </div>

 <!-- Footer -->
        <div id="footer">
            &copy; 2020 &bull;VCE Portal.
        </div>
        <!-- Sripts -->
        <script>
         // Get the modal
var modal = document.getElementsByClassName('bg-modal');

// Get the button that opens the modal
var btn = document.getElementsByClassName("modal-button");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close");

// When the user clicks the button, open the modal 
btn[0].onclick = function() {
    modal[0].style.display = "flex";
}

btn[1].onclick = function() {
    modal[1].style.display = "flex";
}
// When the user clicks on <span> (x), close the modal
span[0].onclick = function() {
    modal[0].style.display = "none";
}

span[1].onclick = function() {
    modal[1].style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

          </script>
       
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script type="text/javascript" src="js/jquery-3.2.1.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/script.js"></script>

    </body>

</html>
