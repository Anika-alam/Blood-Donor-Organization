<!DOCTYPE html>
<html>

<head>
	<title>BLOOD DONOR ORGANIZATION </title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
	    rel='stylesheet' type='text/css'>
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
	<!-- header -->
	<div class="header" id="home">
		<div class="top_menu_w3layouts">

			<div class="header_left">
				<ul>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i> DHANMONDI-15,DHAKA</li>
					<li><i class="fa fa-phone" aria-hidden="true"></i> +(010) 221 918 811</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">anikaalamsuhi@gmail.com</a></li>
				</ul>
			</div>
			<div class="header_right">
				<ul class="forms_right">
					<li><a class="active" href="signin requester.php"> Sign In Requester</a> </li>
					<li><a href="signin.php"> Sign In</a> </li>
					
				</ul>

			</div>
			<div class="clearfix"> </div>
		</div>

		<div class="content white">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="index.html">
							<h1><span class="fa fa-comments-o" aria-hidden="true"></span></h1>
						</a>
					</div>
					<!--/.navbar-header-->
				     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li><a href="index.php" class="active">HOME</a></li>
								
								<li><a href="all donor list.php">ALL DONOR LIST</a></li>
									
								
								<li class="dropdown">
									<a href="services.html" class="dropdown-toggle" data-toggle="dropdown">DONORS BY GROUP <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<form action= "http://localhost/Blood%20Donor%20Organization/A-.php" method = "get">
										<input type="hidden" name="doner" value ="A-">
										<input type ="submit" value="A-">
										</form>
										<br>
										<form action= "http://localhost/Blood%20Donor%20Organization/A-.php" method = "get">
										<input type="hidden" name="doner" value ="A+">
										<input type ="submit" value="A+">
										</form>
										<br>
										<form action= "http://localhost/Blood%20Donor%20Organization/A-.php" method = "get">
										<input type="hidden" name="doner" value ="B-">
										<input type ="submit" value="B-">
										</form>
										<br>
										<form action= "http://localhost/Blood%20Donor%20Organization/A-.php" method = "get">
										<input type="hidden" name="doner" value ="B+">
										<input type ="submit" value="B+">
										</form>
									    <br>
										<form action= "http://localhost/Blood%20Donor%20Organization/A-.php" method = "get">
										<input type="hidden" name="doner" value ="O+">
										<input type ="submit" value="O+">
										</form>
										<br>
										<form action= "http://localhost/Blood%20Donor%20Organization/A-.php" method = "get">
										<input type="hidden" name="doner" value ="O-">
										<input type ="submit" value="O-">
										</form>
										 <br>
										<form action= "http://localhost/Blood%20Donor%20Organization/A-.php" method = "get">
										<input type="hidden" name="doner" value ="AB+">
										<input type ="submit" value="AB+">
										</form>
										<br>
										<form action= "http://localhost/Blood%20Donor%20Organization/A-.php" method = "get">
										<input type="hidden" name="doner" value ="AB-">
										<input type ="submit" value="AB-">
										</form>	
									</ul>
								</li>
								<li><a href="request for blood.php">REQUEST FOR BLOOD</a></li>
								<li><a href="blood bank.php">BLOOD BANK</a></li>
								<li><a href="signup.php"> JOIN </a> </li>
								<li><a href="all request list.php">ALL REQUEST</a></li>
								
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<!-- banner -->
	<div class="banner_inner_content_agile_w3l">
		<p></p>
	</div>
	<!--//banner -->
	<!--/w3_short-->
	<div class="services-breadcrumb_w3ls">
		<div class="inner_breadcrumb">

			
		</div>
	</div>
	<!--//w3_short-->
	<!-- /inner_content -->
	
	
	
<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "blood_donor_organization";
   
   $connect = mysqli_connect($servername, $username, $password, $dbname);
   
   // get values form input text and number
   
   $user_Id = $_POST['user_Id'];
   $email=$_POST['email'];
   $location=$_POST['location'];
   $contact=$_POST['contact'];
   $weight=$_POST['weight'];
   $last_date_of_donation=$_POST['last_date_of_donation'];
   $age=$_POST['age'];
           
   // mysql query to Update data
   $query = "UPDATE `user` SET `email`='".$email."',`location`='".$location."',`contact`='".$contact."',`weight`='".$weight."',`last_date_of_donation`='".$last_date_of_donation."',`age`= '".$age."' WHERE (`user_Id` = '".$user_Id."') and (`password` = '".$password."')";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>
	
	
	
	
	
	<!-- footer -->
	<div class="footer_top_agile_w3ls">
		<div class="container">
			<div class="col-md-3 footer_grid">
				<h3>About Us</h3>
				<p>NIJEDER NAME, INFO

				</p>
				<div class="social">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-rss"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 footer_grid">
				<h3>OUR MISSION</h3>
				<ul class="footer_grid_list">
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a >mission no.1 </a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a >mission no 2</a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a >mission no.3 </a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a >mission no.4</a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a >mission no.5 </a>
					</li>
				</ul>
			</div>
			<div class="col-md-3 footer_grid">
				<h3>Contact Info</h3>
				<ul class="address">
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>DHANMONDI-15 <span>DHAKA.</span></li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">anikaalamsuhi@gmail.com</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+09187 8088 9436</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>

		</div>
	</div>
	<div class="footer_wthree_agile">
		<p>© 2017 BLOOD DONOR ORGANIZATION. All rights reserved </p>

	</div>
	<!-- //footer -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<!-- password-script -->
	<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>
