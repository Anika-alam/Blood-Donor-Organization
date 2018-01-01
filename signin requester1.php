
<!DOCTYPE html>
<html>

<head>
	<title>BLOOD DONOR ORGANIZATION</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords"  />
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
					<li><i class="fa fa-map-marker" aria-hidden="true"></i> DHANMONDI-15, DHAKA</li>
					<li><i class="fa fa-phone" aria-hidden="true"></i> +(010) 221 918 811</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">anikaalamsuhi@gmail.com</a></li>
				</ul>
			</div>
			<div class="header_right">
				<ul class="forms_right">
				    <li><a class="active" href="signin requester.php"> Sign In Requester</a> </li>
					<li><a class="active" href="signin.php"> Sign In</a> </li>
					
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
						<a class="navbar-brand" href="index.php">
							<h1><span class="fa fa-comments-o" aria-hidden="true"></span></h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li><a href="index.php" class="active">Home</a></li>
								
								<li><a href="all donor list.php" class="active" >ALL DONOR LIST</a></li>
									
								
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

	<div class="services-breadcrumb_w3ls">
		<div class="inner_breadcrumb">

			
		</div>
	</div>

	<div class="banner-bottom">
		<div class="container">
				<div class="tittle_head_w3layouts">
				<h3 class="tittle three">Profile</h3>
				
				<!--//php-->
				<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'blood_donor_organization');

$user_Id=$_POST['user_Id'];
$r_password=$_POST['r_password'];
$sql="SELECT *FROM request WHERE(user_Id='$user_Id') and (r_password='$r_password')";
$records=mysqli_query($con,$sql);
?>
<table>
    <tr>
	   <th>r_name</th>
	    <th>r_email</th>
		<th>r_contact</th>
		<th>r_blood_group</th>
		<th>r_blood_amount</th>
		<th>r_delivary_date</th>
		<th>r_location</th>
	   
	</tr>	
	
<?php
while($row=mysqli_fetch_array($records))
{
	echo "<tr><form action=update1.php method=post>";
	echo "<td><input type=text r_name=r_name value='".$row['r_name']."'></td>";
	echo "<td><input type=text r_name=r_email value='".$row['r_email']."'></td>";
	echo "<td><input type=text r_name=r_contact value='".$row['r_contact']."'></td>";
	echo "<td><input type=text r_name=r_blood_group value='".$row['r_blood_group']."'></td>";
	echo "<td><input type=text r_name=r_blood_amount value='".$row['r_blood_amount']."'></td>";
	echo "<td><input type=date r_name=r_delivary_date value='".$row['r_delivary_date']."'></td>";
	echo "<td><input type=text r_name=r_location value='".$row['r_location']."'></td>";
	
	
	
	echo "<input type=hidden r_name=user_Id value='".$row['user_Id']."'>";
	echo "<td><input type=submit>";
	echo "</form></table>";
}	

	?>						
			
				

				
				
				
				
				
							
				
				
			
</body>

</html>