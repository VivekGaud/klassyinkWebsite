<?php
session_start();
$db = mysqli_connect("localhost","root","","freeshop");


$name= $_POST['userid'];
$pass= $_POST['pswrd'];

$value = "select * from customer where cust_name='$name' and cust_pass='$pass'";
$exevalue = mysqli_query($db,$value);

$result = mysqli_num_rows($exevalue);

if($result==1){
	$_SESSION['username'] = $name;
	echo "<script>alert('successfully login')</script>";
	header('location:home.php');
}
else{
	echo "<script>alert('Wrong user name or password')</script>";
	echo "<script>window.open('loginPage.php','_self')</script>";
}
?>