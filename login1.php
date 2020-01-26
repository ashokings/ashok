<?php
if (strftime("%H")>=3&&strftime("%H")<11)
{
echo "<center>";
echo '<table width=1350 border=0 bgcolor="yellow">';
echo '<td align="center"><a href="admin.php" target="main"><b>sign-up</b></a></td><td align="center"><a href="login1.php" target="main"><b>    log-in    </b></a></td><td align="center"><a href="myvote.php" target="main"><b>My Vote</b></a></td><td align="center"><a href="ad.php" target="main"><b>Admin</b></a></td><td align="center"><a href="profile.php" target="main"><b>Main</b></a></td>';
echo "</table>";
echo"</center>"; 
}else
{
	echo "<center>";
echo '<table width=1350 border=0 bgcolor="yellow">';
echo '<td align="center"><a href="admin.php" target="main"><b>Admin</b></a></td><td align="center"><a href="results.php" target="main"><b>Results</b></a></td>';
echo "</table>";
echo"</center>";
}
?><br><br>
<!DOCTYPE html>
<html>
<head>
	<title></title><link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body><center id="main-wrapper"><?php

{
echo "<center>";
	echo'<form method="post" action="login.php">';
	echo"<b>";
		echo"<u style='color:blue;font-size:25pt;'> student login</u><br><br>";
		echo"Roll Number:&nbsp";
		echo'<input type="text" name="rollno" required><br><br>';
		echo" &nbsp &nbsp &nbspPassword:&nbsp";
		echo'<input type="Password" name="pwd" required><br><br>';
		echo'<input type="submit" name="submit" value="login">&nbsp &nbsp&nbsp &nbsp &nbsp &nbsp';
		echo'<input type="reset" name="cancel" value="cancel">';
	echo"</b>";
echo"</form>";
echo"</center>";
}/*
else
{']4]]'
$conn=mysqli_connect("localhost","root","","student");
$rollno=strtoupper($_POST['rollno']);
$pwd=$_POST['pwd'];
$aa=mysqli_query($conn,"select pwd from vote where rollno='$rollno'");
$pwd1=mysqli_fetch_assoc($aa);
$b=mysqli_query($conn,"select sname from vote where rollno='$rollno'");
$s=mysqli_fetch_assoc($b);
$_SESSION['rollno']=$rollno;
$_SESSION['pwd']=$pwd;
if($pwd==$pwd1['pwd'])
{
	echo "<b> welcome" .$s['sname'] ."...........!</b>";
	echo '<form action="logout.php">';
	echo '<input type="submit" value="Log-out"></form>';
}
else
{
	echo "<b> Enter The Valid Credentials</b>";
}

}*/
?> </center>
</body>
</html>