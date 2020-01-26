

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
<div id="main-wrapper">
	<center><h3>USER LOGIN</h3></center>
	<form id="form-values" method="post" action="index.php">
		<label id="label">username:</label><input class="input-values" type="text" name="username" placeholder="Enter username"><br><br>
			<label id="label">Password:</label><input class="input-values" type="password" name="password" placeholder="Enter password"><br><br>
			<input type="submit" id="login-button" name="usersubmit" value="Login"><br><br>
			<a href="register.php"> <input type="button" value="Register" id="loginback-button"></a>
			
	</form>
	
</div><br><br><br>

<div id="main-wrapper">
	<form id="form-values" method="post" action="index.php">
		<center><h3>ADMIN LOGIN</h3></center>
	<form id="form-values" method="post" action="index.php">
		<label id="label">username:</label><input class="input-values" type="text" name="username" placeholder="Enter username"><br><br>
			<label id="label">Password:</label><input class="input-values" type="password" name="password" placeholder="Enter password"><br><br>
			<input type="submit" id="login-button" name="adminsubmit" value="Login"><br><br>
	
	</form>
	
</div>

<?php
if (isset($_POST['usersubmit'])) 
{
	$username=$_POST['username'];
	$password=$_POST['password'];


	$query="select * from userlogin where username='$username' and password='$password'";
	$quer_run=mysqli_query($conn,$query);
	if (mysqli_num_rows($quer_run)>0) 
	{
		$_SESSION['user']=$username;
		header('location:userhomepage.php');
	}
	else
	{
		echo '<script type="text/javascript">alert("INVALID USER");</script>';
		
	}
}

if (isset($_POST['adminsubmit'])) 
{
//echo '<script type="text/javascript">alert("PASSWORD");</script>';
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from adminlogin where username='$username' and password='$password'";
	$quer_run=mysqli_query($conn,$query);
	if (mysqli_num_rows($quer_run)>0) 
	{
		$_SESSION['admin']=$username;
		header('location:adminhomepage.php');
	}
	else
	{
		echo '<script type="text/javascript">alert("INVALID USER");</script>';
		
	}
}


?>

</body>
</html>