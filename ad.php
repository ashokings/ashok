<?php echo "<center>";
echo '<table width=1350 border=0 bgcolor="yellow">';
echo '<td align="center"><a href="admin.php" target="main"><b>sign-up</b></a></td><td align="center"><a href="login1.php" target="main"><b>    log-in    </b></a></td><td align="center"><a href="profile.php" target="main"><b>Main</b></a></td>';
echo "</table>";
echo"</center><br><br>"; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title><link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body><center id="main-wrapper">
	
<?php
{
echo "<center>";
	echo'<form method="post" action="de.php">';
	echo"<b>";
		echo"<u style='color:blue;font-size:25pt;'>Admin login</u><br><br>";
		echo"Admin Name:&nbsp";
		echo'<input type="text" name="name" required><br><br>';
		echo" &nbsp &nbsp &nbspPassword:&nbsp";
		echo'<input type="Password" name="pwd" required><br><br>';
		echo'<input type="submit" name="submit" value="login">&nbsp &nbsp&nbsp &nbsp &nbsp &nbsp';
		echo'<input type="reset" name="cancel" value="cancle">';
	echo"</b>";
echo"</form>";
echo"</center>";
}
?>
 </center>
</body>
</html>