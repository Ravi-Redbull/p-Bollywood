<?php
session_start();
include("conn.php");

$username=$_POST['username'];
$password=$_POST['password'];
$retrive="SELECT * FROM library WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $retrive);
if(mysqli_num_rows($result)){
	echo "Welcome $username You have Successfully Login";
}
else
{
	die("Failed to login:".mysqli_connect_error());
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Home&nbsp;|&nbsp;Library Management System</title>
	 <meta charset="utf-8">
      <meta name="viewport" width="content-device-width,initial-scale=1">
	 	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>

 <div class="wrap">
 	<ul class="qwer">
 		<li><a class= "active abc" href="home.php">Home</a></li>
 		<li><a class="abc"  href="#" >About us</a></li>
 		<li><a class="abc" href="#"   >Book Transaction</a>
 	</li>
 		<li><a class="abc" href="https://www.cricbuzz.com/"  target="_blank">Our Mission</a></li>
 		<li><a class="abc" href="https://www.mapsofindia.com/maps/bihar/districts/khagaria.htm"  target="_blank">Contact us</a></li>
 	</ul> <!-- <font style="position: relative;top:15px;left: 30%;font-size: 40px;"><i>Digital Library Management System</i></font> -->
 		<form   action ="displaybook.php" method="post" style="position: absolute;left:60%;" >
	 
		<input type="text" name="search" required size="60" placeholder="Enter the book titled to be Searched..." style="height:50px;">
	 	 
	<input type="submit" value="Go" name="" style="height: 50px;position:absolute;width:89px; background:linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);">
	<!-- <input type="reset" value="reset" name="" style="height: 50px;"> -->
</form>
 </div><hr>
 	<pre>
		Ph:+91 9304036596,+91 9110132757                                                                                                                                                                                                                                               <a class="a" href="https://www.google.co.in/maps/place/Administrative+Bldg,+NIT+Rd,+Ghungur,+Masimpur,+Silchar,+Assam+788118/@24.7585595,92.7931303,17z/data=!3m1!4b1!4m6!1m3!3m2!1s0x374e49dcb63bae9b:0x81efa836714a289b!2sNational+Institute+of+Technology+Silchar!3m1!1s0x374e49c1f6648043:0x23d01954cf29fd79">Get directions</a>&nbsp;<span class="a">|</span>&nbsp;<a class="a" href="http://www.nits.ac.in/aboutus/reachus.php">Reach us</a>
		Email:gandhibrothers@gmail.com
		&copy;Copyright 2020  All rights reserved to Open Library
</body>
</html>