<?php
include('contacts.php');
if(isset($_POST['submit'])){
	$fullName=$_POST['fullName'];
	$email=$_POST['email'];
	$message=$_POST['message'];



 $query = mysqli_query($con,"Insert into curdoperation (fullName,email,message) Values ('$fullName,'$email','$message')");
 if ($query) {
 	echo "<script>alert(Successfully delivered)</script>";
 }else {
 	echo "<script>alert(There is an error)";
 }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
     <section class="contact">
     	<h4 class="home"><a href="home.html">Home</a></h4>
     	<div class="content">
     		<h2>Contact us</h2>
     		<p>Welcome to Simple Website Company site contact us or give a suggestion or advice thanks!</p>
     	</div>

     	<div class="container">
     		<div class="contactInfo">
     			<div class="box">
     				<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
     				<div class="text">
     				<h3>Address</h3>
     				<p>Kalisimbi road Musanze<br>POBOX 330 Kigali</p>
     			</div>
     		</div>
     		<div class="box">
     				<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
     				<div class="text">
     				<h3>Phone</h3>
     				<p>+250780000000</p>
     			</div>
     		</div>
     		<div class="box">
     				<div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
     				<div class="text">
     				<h3>Email</h3>
     				<p>eazibadman@gmail.com</p>
     			</div>
     		</div>
     	</div>
     	<div class="contactForm">
     		<form action="contacts.php" method="post">
     			<h2>Send Message</h2>
     			<div class="inputBox">
     				<input type="text" name="fullName" required="required">
     				<span>Full Name</span>
     			</div>
     			<div class="inputBox">
     				<input type="text" name="email" required="required">
     				<span>Email</span>
     			</div>
     			<div class="inputBox">
     				<textarea required="required" name="message"></textarea>
     				<span>Type your message here....</span>
     			</div>
     			<div class="inputBox">
     				<input type="submit" name="" value="Send">
     			</div>
     		</form>
     	</div>
     </div>

     </section>
</body>
</html>