<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css"  href="login.css">
	<script src="login.js" type="text/javascript">
		</script>	
		<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">

<link href="/mywebsitefolder/fontawesome/fontawesome-all.css" rel="stylesheet">


</head>
<body><script type="text/javascript">
			document.body.style.zoom="100%";

</script>
	<h1><i class="fas fa-sign-in-alt"></i> ID VERIFICATION</h1>
	  <span style="font-size: 19px; position:absolute;top:140px;left:10px;"><span style="color:white">NOT REGISTERED ? </span><a href="registration.html" style="color:red"><i class="fas fa-external-link-alt"></i>Click Here<a></span>
	<form action="loginfinal.php" style="position: relative;" onsubmit="return validate()" id="form1" method="POST">
	<div class="container">

		<div class="logintitle"></div> 

		<div class="loginhere"><label for="username"><i class="fas fa-user"></i>Identification: </label>
			<input style="height:40px;width:150px;font-size:14pt;background-color:pink;color:brown;" type="text"  placeholder="XR-4872-2989" id="username" name="username">		</div>

		<div class="loginwarning"><label for="password" ><i class="fas fa-key"></i>Password: </label>
			<input style="height:40px;width:150px;font-size:14pt;background-color:pink;color:brown;"  type="Password" id="password"  placeholder="security code" name="password">		</div>

  </div>
  <div class="outside"></div>
  <label for="checkha" class="checkha">
  <input type="checkbox" name="checkha"  id="checkha">REMEBER ME</LABEL>
  <button type="submit" id="tibutton" style="position:absolute;bottom:-35px;left:8em" name="toched" ><i class="fas fa-hand-point-right"></i>Submit</button>
  <!--or do <button type="button" onclick="return validate"-->
  </form>

  <center ><div style="position:absolute;color:#F8E8DB;background-color:#134151;width:100%;margin-bottom: 0px;padding:0px;font-family:system-ui;border-top:4px solid black;"> 
  <i class="far fa-copyright"></i> | All Rights under developer of website | Check Point : Inclined Scorpio |</center>
<?php
if(isset($_COOKIE['username']) and isset($_COOKIE['password']))
{
   $user=$_COOKIE['username'];
   $pass=$_COOKIE['password'];

   echo"
   <script>
   document.getElementById('username').value='$user';
   document.getElementById('password').value='$pass';
   document.getElementById('tibutton').click();
   </script>";

}
 else if(isset($_COOKIE['username']))
{
   $user=$_COOKIE['username'];
  

   echo"
   <script>
   document.getElementById('username').value='$user';
   </script>";

}




?>
  	</body>
</html>
