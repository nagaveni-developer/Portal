<?php
    session_start();
    include("connect.php");
    if(! isset($_SESSION['user']))
        header("Location: login.php");
?>
<!DOCTYPE html>
<html>
    <head>
		<title> VCE Portal </title>
	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
		<link rel="icon" href="images/icon1.png" >
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
        <style>
*,:after,:before{box-sizing:border-box}
.pull-left{float:left}
.pull-right{float:right}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}

.accordion-wrap{
	top:50px;
	left:0;
	right:0;
	bottom:0;
	padding:75px;
	position:fixed;

}
.accordion{
	width:1780%;
	margin:auto;
	max-width:500px;
	overflow:hidden;
	border-radius:3px;
    color:white;
	background:#e6ffe6;

	box-shadow:0 17px 50px 0 rgba(0,0,0,.19),0 12px 15px 0 rgba(0,0,0,.24);
}
.clearfix{
	padding : 20px;
}
.accordion>a{
	color:black;
	padding:15px;
	display:block;
	text-decoration:none;
	-webkit-transition:all .3s ease-in-out 0s;
	        transition:all .3s ease-in-out 0s;
}
.accordion>a:not(:last-child){
	border-bottom:1px solid rgba(0,0,0,.2);
}
.accordion>a:hover,
.accordion>a.active{
	background:black;
        color:white;
}
.accordion>a.active{
	color:white;
}
.accordion>a>.alert-numb,
.accordion>.sub-nav>a>.alert-numb{
	color:#eee;
	right:10px;
	height:22px;
	min-width:40px;
	font-size:12px;
	font-weight:600;
	line-height:22px;
	border-radius:15px;
	text-align:center;
	background:#004d00;
}
.accordion>a.active>.alert-numb,
.accordion>.sub-nav>a.active>.alert-numb{
	background:#ccffcc;
        color: black;
}
.accordion .sub-nav{
	display:none;
	color:#374046;
	overflow:hidden;
	background:#ecf0f1;
}
.accordion .sub-nav.open{
	display:block;
}
.accordion .sub-nav a{
	display:block;
	color:inherit;
	font-weight:300;
	padding:10px 15px;
	text-decoration:none;
	-webkit-transition:all .2s ease-in-out 0s;
	        transition:all .2s ease-in-out 0s;
}
.accordion .sub-nav a:not(:last-child){
	border-bottom:1px solid rgba(0,0,0,.1);
}
.accordion .sub-nav a:hover{
	background:#c2ced1;
	box-shadow:5px 0 0 #8ca3a8 inset;
}

.accordion .html{
	padding:15px;
}
.accordion .about-me{
	text-align:center;
	position:relative;
}
.accordion .about-me h4{
	margin-bottom:0;
}
.accordion .about-me p{
	font-size:14px;
	font-weight:300;
	margin-bottom:0;
}
.accordion .about-me .photo{
	width:95px;
	height:95px;
	margin:auto;
	overflow:hidden;
	border-radius:50%;
	position:relative;
	border:4px solid #fff;
	box-shadow:0 6px 20px 0 rgba(0,0,0,.19),0 8px 17px 0 rgba(0,0,0,.2);
	background:url(https://pbs.twimg.com/profile_images/764041688243376128/cXFgS1TO_400x400.jpg) no-repeat center;
        background-attachment: fixed;
       background-size: 100% 100%;
}
.accordion .about-me .photo .photo-overlay{
	top:0;
	left:0;
	right:0;
	bottom:0;
	opacity:0;
	visibility:hidden;
	position:absolute;
	background:rgba(0,0,0,.4);
}
.accordion .about-me .photo .photo-overlay .plus{
	top:50%;
	left:50%;
	width:30px;
	height:30px;
	color:#1a1a1b;
	cursor:pointer;
	font-size:24px;
	font-weight:100;
	margin-top:-15px;
	margin-left:-15px;
	position:absolute;
	line-height:30px;
	border-radius:50%;
	text-align:center;
	background:#074f80;
	-webkit-transform:scale(0) rotate(0);
	    -ms-transform:scale(0) rotate(0);
	        transform:scale(0) rotate(0);
	-webkit-transition:all .1s ease-in-out 0s;
	        transition:all .1s ease-in-out 0s;
}
.accordion .about-me .photo:hover .photo-overlay{
	opacity:1;
	visibility:visible;
}
.accordion .about-me .photo:hover .photo-overlay {
	-webkit-transform:scale(1) rotate(90deg);
	    -ms-transform:scale(1) rotate(90deg);
	        transform:scale(1) rotate(90deg);
}

.accordion .about-me .social-link{
	top:0;
	left:0;
	right:0;
	bottom:0;
	opacity:0;
	padding-top:48px;
	visibility:hidden;
	position:absolute;
	background:rgba(0,0,0,.3);
	-webkit-transition:opacity .5s ease-in-out 0s;
	        transition:opacity .5s ease-in-out 0s;
}
.accordion .about-me .social-link.active{
	opacity:1;
	visibility:visible;
}
.accordion .about-me .social-link .link{
	width:30px;
	padding:0;
	color:#eee;
	height:30px;
	margin:0 4px;
	line-height:28px;
	border-radius:50%;
	display:inline-block;
	-webkit-transform:translateY(-80px) scale(0);
	    -ms-transform:translateY(-80px) scale(0);
	        transform:translateY(-80px) scale(0);
	border:1px solid rgba(0,0,0,.2);
}


.accordion .about-me.blur p,
.accordion .about-me.blur h4,
.accordion .about-me.blur .photo{
	-webkit-filter:blur(2px);
	filter:blur(2px);
}

.accordion .chat .user:not(:last-child){
	margin-bottom:10px;
}
.accordion .chat .user .photo{
	width:40px;
	height:40px;
	font-size:24px;
	line-height:36px;
	text-align:center;
	position:relative;
	border-radius:3px;
	display:inline-block;

}
.accordion .chat .user .photo:before,
.accordion .chat .user .photo:after{
	content:'';
	opacity:0;
	visibility:hidden;
	position:absolute;

}
.accordion .chat .user .photo:before{
	left:50%;
	width:60px;
	bottom:50px;

	font-size:12px;
	line-height:14px;
	margin-left:-30px;
	text-align:center;
	background:#333333;
	border-radius:4px;
	word-break:break-all;
	content:attr(data-username);
}
.accordion .chat .user .photo:after{
	left:50%;
	bottom:35px;
	margin-left:-8px;
	border:8px solid transparent;
	border-top:8px solid #333333;
}
.accordion .chat .user .photo:hover:before,
.accordion .chat .user .photo:hover:after{
	opacity:1;
	visibility:visible;
}

.accordion .chat .user.user-dribble .photo{
	color:#fff;
	margin-right:5px;
	background:#6997c2;
}
.accordion .chat .user .text-msg{
	max-width:70%;
	font-size:13px;
	padding:4px 8px;
	background:#fff;
	border-radius:4px;
	display:inline-block;
	border:1px solid #cdd6d8;
}
.accordion .chat .user.user-khadkamhn .text-msg{
	background:#dce2e4;
}

.accordion .invite{
	text-align:center;
}
.accordion .invite .dribbble{
	display:block;
	color:#c33269;
	margin:10px 0;
	font-size:24px;
	font-family:Pacifico;
}
.accordion .invite .btn{
	color:#eee;
	font-weight:500;
	background:#ccc;
	padding:10px 15px;
	border-radius:2px;

	display:inline-block;
	text-transform:uppercase;
}
.accordion .invite .btn:hover{
	box-shadow:none;
	background:#90acc4;
}
</style>

    </head>
    <body id="pro">
        <!-- navigation bar -->
        <a href="index.php">
            <div id="log"><br>
                <div id="ntro"  style="color:white;"><b>VCE Portal</b></div>
            </div>
        </a>
        <ul id="nav-bar" style="color:black;">
            <a href="direct.php"><li>Request</li></a>
            <a href="profile.php"><li id="home">Hi, <?php echo $_SESSION["user"]; ?></li></a>
            <a href="logout.php"><li>Log Out</li></a>
        </ul>

        <!-- content -->
        
        <div class="accordion-wrap">
		<div class="accordion">
			<a href="#1" class="active"><i class="fa fa-user"></i> Profile</a>
			<div class="sub-nav active">
				<div class="html about-me">
					<div class="photo">
						<div class="photo-overlay">
                        </div>
                    </div>
                    <h4><?php echo $_SESSION["user"]; ?></h4>
                </div>
            </div>
            <a href="#2"><i class="fa fa-id-card"></i>  Details</a>
            <div class="sub-nav">
					<div class="clearfix">
                       <p><span class="text-msg pull-left">Name : <?php echo $_SESSION["name"] ; ?></p></span><br>

						<p><span class="text-msg pull-left">Email : <?php echo $_SESSION["email"]; ?></p><br>
                   
						<p><span class="text-msg pull-left">Year : <?php echo $_SESSION["year"] ; ?></p><br>
                   
						<p><span class="text-msg pull-left">Branch : <?php echo $_SESSION["branch"] ; ?></span></p><br>
                   
                   
						<p><span class="text-msg pull-left">Joined date :
                        <?php echo $_SESSION["date"]; ?></span></p> <br>
                    </div>
			  
			</div>
            <a href="#3"><i class="fa fa-history"></i> My Activity <span class="pull-right alert-numb">0</span></a>
			<div class="sub-nav">
				   <a href="#">Requested<span class="pull-right alert-numb">0</span></a>
				<a href="#">Applied <span class="pull-right alert-numb">0</span></a>
			</div>
          <p >
                    <?php
                    $p=$_SESSION["user"];
                    $query = "select question from quans where askedby='$p'";
                    $result = mysqli_query( $conn, $query);
                    if(mysqli_error($conn)){
                      echo "<script>window.alert('Something Went Wrong. Try Again');</script>";
                      }
                      else if( mysqli_num_rows($result) > 0 )
                      {
                        $count=1;
                        while( $row = mysqli_fetch_assoc($result) ){
                          echo $count.". ".$row['question']."\n";
			  echo "<br>";
                          $count=$count+1;
                        }
			echo "<br>";
                      }
                     ?>
                     </p>
                     <br>
                     

                </div>
		</div>         
        <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-plugins.js"></script>
<script>
        $(function(){
	Profile.load();
});

Profile = {
	load:function(){
		this.links();
		this.social();
		this.accordion();
	},
	links:function(){
		$('a[href="#"]').click(function(e){
			e.preventDefault();
		});
	},
	social:function(){
		$('.accordion .about-me .photo .photo-overlay .plus').click(function(){
			$('.social-link').toggleClass('active');
			$('.about-me').toggleClass('blur');
		});

	},
	accordion:function(){
		var subMenus = $('.accordion .sub-nav').hide();
		$('.accordion > a').each(function(){
			if($(this).hasClass('active')){
				$(this).next().slideDown(100);
			}
		});
		$('.accordion > a').click(function(){
			$this = $(this);
			$target =  $this.next();
			$this.siblings('a').removeAttr('class');
			$this.addClass('active');
			if(!$target.hasClass('active')){
				subMenus.removeClass('active').slideUp(100);
				$target.addClass('active').slideDown(100);
			}
			return false;
		});
	}
}
</script>

        <!-- Footer -->
        <div id="footer">
            &copy; 2020 &bull;VCE Portal.
        </div>

	</body>
	
</html>
