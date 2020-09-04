 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login Page&nbsp;|&nbsp;Library Management System</title>
  
 	<link rel="stylesheet" type="text/css" href="style.css">
 
 </head>
 <body>
	 <div class="center">
       <h1><i>Login</i></h1>
       <form action ="insert_login.php" method="post">
       	<div class="txt_field">
       		<input type="text" required name="username">
       		<span></span>
       		<label>Username</label>
       	</div>
       	<div class="txt_field">
       		<input type="password" required  name="password" >
       		<span></span>
       		<label>Passsword</label>
       	</div>
       	<div class="pass"><a href="forget.php">Forgot Password?</a></div>
       	<input type="submit" value="Login">
       	<div class="signup_link">
       		Not a member?  <a href="sign_up.php">Signup</a>
       	</div>
       </form>
   </div>
  </div>
 
 	  
 </body>
 </html>