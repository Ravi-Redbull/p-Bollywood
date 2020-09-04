<?php
include("conn.php");
error_reporting(0);
?>
 
<?php

$username=$_POST['username'];
$password=$_POST['password'];
$code=$_POST['code'];
$sch_id=$_POST['sch_id'];
$email=$_POST['email'];


$sql="INSERT INTO library VALUES ('$username','$password','$code','$sch_id','$email')";
$data= mysqli_query($conn,$sql);
if($data){
   echo ' Data inserted Successfully <button><a href="login.php"><i>Click Me to Login</i></a></button>';

}
else
{
  echo " Failed to Data inserted into database May be you use some wrong credentials!";
}
?>
 
