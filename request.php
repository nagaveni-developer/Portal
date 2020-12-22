
<?php
    session_start();
    include("connect.php");
    if(! isset($_SESSION['user']))
        header("Location: index.php");
        $query="select * from book";
        $res=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
    <head>
        <title> VCE Portal </title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link rel="icon" href="images/icon1.png" >
    </head>
    <body id="_5">
        <!-- navigation bar -->
        
            <div id="log"><br>
                <div id="ntro" style="color:white;"><b>VCE Portal</b></div>
            </div>
    
        <ul id="nav-bar">
            <?php
                if(! isset($_SESSION['user'])){
            ?>
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

        <form action="req_payment.php" method="get">
            <center>
                            <h2 style="color:black;">Select the Document</h2><br>
                 
                        <div class="modal-block">   
                        <div class="button-block">     
                            <div class="buttons"><input href="#pop6" class="modal-button"type="button" value="Allotment Order" id="allotment-order" class="up-in"><br><br></div>
                        </div>
                        <br>
                        <div class="button-block">     
                            <div class="buttons"><input href="#pop7" class="modal-button"type="button" value="Bonofied" class="up-in"><br><br></div>
                            <!--<div class="buttons"><a href=""><input name="submit" type="button" value="Upload Documents" class="up-in"></a></div>
                    -->
                        </div>
                        </div>
                        </center>
                   <div class="bg-modal" id="pop6">
                   <div class="modal-content">
                   <div class="close">x</div>
                   <center>
                   <br>
                   <h2 style=" color: black;">Allotment Order</h2>
                   <br>
                   </center>
                   <p style="color:black;">
                   1. Reason for application.<br>
                   2. Required to pay 10/-.<br>
                   3. Click proceed, to pay the amount.
                   <br>
                   </p>
                   <center>
                   <div class="buttons" style="height:10px; width=4px;"><button type="button" 
                        id="allotment"
                        data-doc_req="allotment"
                        onClick="requesta(this.id)">
                        Proceed to Pay</button></div>
                  </center>
                   </div>
               </div>
               <div class="bg-modal" id="pop7">
                   <div class="modal-content">
                   <div class="close">x</div>
                   <center>
                   <br>
                   <h2 style=" color: black;">Bonofied</h2><br>
                   <br>
                   </center>
                   <p style="color:black;">
                
                   1. Click proceed.<br>
                   
                   <br><br>
                   </p>
                   <center>
                   <div class="buttons"><button type="button" 
                        id="bonofied"
                        data-doc_req="bonofied"
                        onClick="requestb(this.id)">
                        Proceed</button></div>
                  </center>
                   </div>
               </div>

                </form>
            
            </center>
        </div>


        <!-- Footer -->
        <div id="footer">
            &copy; 2020 &bull; VCE Portal.
        </div>

        <!-- Sripts -->
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
	function requesta(buttonID){
		var button=document.getElementById(buttonID);
        var doc_req = button.getAttribute("data-doc_req");
		window.location.href = 'req_payment.php?doc_req=' + doc_req; 
    }
    function requestb(buttonID){
		var button=document.getElementById(buttonID);
        var doc_req = button.getAttribute("data-doc_req");
		window.location.href = 'student_mail.php?doc_req=' + doc_req; 
	}
	</script>
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
