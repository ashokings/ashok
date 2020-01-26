<?php session_start();
session_destroy();
if (strftime("%H")>=3&&strftime("%H")<11)
{
echo "<center>";
echo '<table width=1350 border=0 bgcolor="yellow">';
echo '<td align="center"><a href="admin.php" target="main"><b>sign-up</b></a></td><td align="center"><a href="login1.php" target="main"><b>    log-in    </b></a></td><td align="center"><a href="myvote.php" target="main"><b>My Vote</b></a></td><td align="center"><a href="ad.php" target="main"><b>Admin</b></a></td>';
echo "</table>";
echo"</center>";
}else
{
	echo "<center>";
echo '<table width=1350 border=0 bgcolor="yellow">';
echo '<td align="center"><a href="ad.php" target="main"><b>Admin</b></a></td><td align="center"><a href="results.php" target="main"><b>Results</b></a></td>';
echo "</table>";
echo"</center>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
<center><h3 style='color:blue;font-size:25pt;'>profile</h3>
<table>
	<tr>
		<td id="main-wrapper">
			<center>
				<b style='color:blue;font-size:25pt;'>K.ASHOK</b><br>
				<img src="b.jpg" width="100" height="125" ><br>
				<b style='color:red;font-size:20pt;'>16G21A0565</b><br><br><br>
				<b style='font-size:15pt;'>1.provide chilled water during the college hours.<br>
				2.providing on every saturday is holiday.<br>
			3.Attendance free.</b>
			</center>
		</td><td></td>
		<td id="main-wrapper">
			<center >
				<b style='color:blue;font-size:25pt;'>K.VINEETH</b><br>
				<img src="a.jpg" width="100" height="125"><br>
				<b style='color:red;font-size:20pt;'>16G21A0569</b><br><br>
<b style='font-size:15pt;'>
1.provided half day college.<br>
2.provided guest lecturers.<br>
3.Mobiles are allowed in college.</b>
			</center>
		</td>
	</tr>
</table>
</center>

</body>
</html>
