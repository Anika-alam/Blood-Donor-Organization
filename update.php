<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'blood_donor_organization');
$sql="UPDATE user SET name='$_POST[name]',email='$_POST[email]',location='$_POST[location]' ,contact='$_POST[contact]',weight='$_POST[weight]',age='$_POST[age]',last_date_of_donation='$_POST[last_date_of_donation]'   WHERE user_Id='$_POST[user_Id]'";
if(mysqli_query($con,$sql))
	header('Location: index.php');


else
	echo "not updated";
?>