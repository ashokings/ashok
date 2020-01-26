<?php 
$conn=mysqli_connect("localhost","root","","student");
session_start();
session_destroy();
if (strftime("%H")>=3&&strftime("%H")<10)
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
echo '<td align="center"><a href="admin.php" target="main"><b>Admin</b></a></td><td align="center"><a href="results.php" target="main"><b>Results</b></a></td><td align="center"><a href="profile.php" target="main"><b>Main</b></a></td>';
echo "</table>";
echo"</center><br><br>";
}
echo "<center><b>successfully logout..........!</b></center>";
?>