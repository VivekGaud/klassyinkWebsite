<?php

$db = mysqli_connect("localhost","root","","freeshop");


$name= $_POST['userid'];
$mobile= $_POST['mobile'];
$address= $_POST['address'];
$pass= $_POST['pswrd'];

$exetablecheck =0;

$tablecheck = "select * from customer";
$exetablecheck = mysqli_query($db,$tablecheck);


if(!$exetablecheck)
{

	$tablecreate = "create table customer (c_id int NOT NULL AUTO_INCREMENT,cust_name varchar(20),cust_mobile int,cust_add varchar(20),cust_pass int,PRIMARY KEY (c_id))";
	$exetablecreate = mysqli_query($db,$tablecreate);
	echo " <script>alert('Something went wrong')</script>";
	echo "<script>window.open('signupPage.php','_self')</script>";

}
else{
	$value = "select * from customer where cust_name='$name' and cust_mobile='$mobile'";
	$exevalue = mysqli_query($db,$value);

	$result = mysqli_num_rows($exevalue);

	if($result==1){
		echo " <script>alert('Use different username and mobile number')</script>";
	}
	else{
		$insert = "insert into customer (cust_name,cust_mobile,cust_add,cust_pass) values ('$name','$mobile','$address',$pass)";
		$exeinsert = mysqli_query($db,$insert);
		echo "<script>alert('Successful Signup')</script>
		<script>window.open('loginPage.php','_self')</script>";
	
	}
	echo "else";
	

}


?>