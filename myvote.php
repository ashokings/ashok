<?php 
session_start();
if($_SESSION['rollno']=='')
{
	header('location:login1.php');
}
else 
{
	echo "<center>";
echo "<b style='color:green;font-size:25;'>welcome " .$_SESSION['name']."  .........! </b></center><br><br>";
echo'<form action="ss.php" method="post">';
echo "<center>";
	echo '<img src="b.jpg" height="125" width="100"><br><input type="radio" name="vote" value="ashok">';
	echo"<b style='color:blue;font-size:20;'>ASHOK</b><br><br><br><br>";
	echo '<img src="a.jpg" height="125" width="100"><br><input type="radio" name="vote" value="vineeth">';
	echo"<b style='color:blue;font-size:20;'>VINEETH</b><br><br><br><br>";
	echo '<input type="submit" name="submit" value="submit" &nbsp >';
	echo "</center>";
	echo '</form>';
	echo '</center>';
}
 ?>
