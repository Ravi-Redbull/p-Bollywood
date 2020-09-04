
<!DOCTYPE html>
<html>
<head>
  <title>Registration Page&nbsp;|&nbsp;Library Management System</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
      <!--  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head> -->
<body>
  <div class="center">
       <h1><i>New Registration</i></h1>
       <form action ="insert.php" method="post">
        <div class="txt_field">
          <input type="text" required name="username" >
          <span></span>
          <label>Username</label>
        </div>
              <div class="txt_field">
                     <input type="password" required  name="password" >
                     <span></span>
                     <label>Set Passsword</label>
              </div>
        
        <div class="txt_field">
          <input type="text" required name="code" >
          <span></span>
          <label>Branch Code</label>
        </div>
        <div class="txt_field">
          <input type="text" required name="sch_id" >
          <span></span>
          <label>Scholar Id</label>
        </div>
        <div class="txt_field">
          <input type="email" required name="email" >
          <span></span>
          <label>Email</label>
        </div>
        <input type="submit" value="Register" name="submit" >
        
       </form>
   </div>
</body>
</html>
