<?php 
$conn=mysqli_connect("localhost","root","","student");
$v=mysqli_query($conn,"select count(*) from vote where cnd='vineeth'");
	$v1=mysqli_fetch_assoc($v);
	$v2=$v1['count(*)'];
	$a=mysqli_query($conn,"select count(*) from vote where cnd='ashok'");
	$a1=mysqli_fetch_assoc($a);
	$a2=$a1['count(*)'];
	echo "<center>";
echo '<table width=1350 border=0 bgcolor="yellow">';
echo '<td align="center"><a href="ad.php" target="main"><b>Admin</b></a></td><td align="center"><a href="profile.php" target="main"><b>Main</b></a></td>';
echo "</table>";
echo"</center>";//echo strftime("%H");
	if (strftime("%H")<3||strftime("%H")>=11)
	if ($v2>$a2)
	 {
		echo "<center ><table><th style='color:blue;font-size:100;'>winner is VINEETH</th></table></center>";
	}
	else
	{
		echo "<center ><table><th style='color:red;font-size:100;'>winner is ASHOK</th></table></center>";
	}


 ?>