<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'blood_donor_organization');
$sql="UPDATE request SET r_name='$_POST[r_name]',r_blood_group='$_POST[r_blood_group]',r_blood_amount='$_POST[r_blood_amount]',r_delivary_date='$_POST[r_delivary_date]',r_location='$_POST[r_location]'  WHERE user_Id='$_POST[user_Id]'";
if(mysqli_query($con,$sql))
	header('Location: index.php');


else
	echo "not updated";
?>