<?php
// session_start();
include("conn.php");
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    
 	$sql="SELECT * FROM library WHERE email='$email'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
	$fetch_email_id=$row['email'];
	$password=$row['password'];
 

	if($email==$fetch_email_id) {
		// echo $email;
				$to = $fetch_email_id;
				$subject = "Password";
                $txt = "Your password is : $password";
                $headers = "From: rraushangandhi@gmail.com";
                if(mail($to,$subject,$txt,$headers))
                	echo '<i>Email Sent Successfully</i>';
                else
                	echo '<i>Failed:Please use your registered mail id to get the Password</i>';
                
		 
			}

  else
    echo '<i>Failed:Please use your registered mail id to get the Password :: Thank You !!</i>';
}
?>
