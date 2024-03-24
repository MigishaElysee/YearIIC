<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$fullName=$_POST['fullName'];
	$email=$_POST['email'];
	$message=$_POST['message'];


$con=new mysqli('localhost','Migisha','webines1','contact');
if ($con) {
	//echo "Connection Successful";
	$sql="insert into `data` (fullName,email,message)values('$fullName,$email,$message')";
	$result=mysqli_query($con,$sql);

	if ($result) {
		echo "Data inserted Successfully";
	}else{
		die(mysqli_error($con)); 
	}
}else{
	die(mysqli_error($con));
}
}
?>
